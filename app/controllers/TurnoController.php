<?php

class TurnoController extends JoshController
{
	
	/**
	 * Falta Repository
	 *
	 * @var Falta
	 */
	protected $turno;
	
	public function __construct(Turno $turno)
	{
		$this->turno = $turno;
	}
	
	public function index()
	{
		return Redirect::route('turnos');
	}
	
	public function index2()
	{
		return View::make('admin.turnos.index');
	}
	
	
	public function showTurnos($id = null)
	{
		$id     = '57b936a569cebe75ca0d6277';
		$active = Session::has('activeTakeTurns') ? Session::get('activeTakeTurns') : false;
//		dd($id);
//		if (is_null($turns)) {
//			return Redirect::to('taketurn')
//				->withActive($active);
//		}

//		$turns = $turns->local->planilla->horaTurnos;
		
		return View::make('frontend.calendar')
			->withDays(self::$days2)
//			->withTurns($turns)
			->withActive($active = true);
	}
	
	
	public function getTurnos()
	{
		$data = array();
		
		if (Request::ajax()) {
			$data = array(
				'pass' => true,
			);
		}
		
		return Response::json($data);
	}

	public  function takeTurns ($id, $taken, $left) {

		$left = (int) $left;
		$taken = $taken == 'true' ? true : false;
		$pass = false;
		$message = '';

		try {
			$horaTurno = HoraTurno::find($id);

			if (is_null($horaTurno)) {
				return;
			}

            $maxEmpaques = (int)$horaTurno->max_empaques;

			if ($taken) {
				// El usuario Suelta el turno 
				$horaTurno->delete();

				$message = 'Turno eliminado con exito!';
				$pass = true;
				$left = $left + 1;
			} else if (!$taken && $left > 0) {
				$count = TomaTurno::where('id_turno', (int)$horaTurno->id_turno)->count();

				if ($count < $maxEmpaques) {
					// TODO: cambiar a usuario Auth cuando este listo el login
					$tomaTurno = TomaTurno::create(array(
                        'id_toma_turno'     => TomaTurno::lastID(),
                        'fecha'             => Carbon::now(),
                        'id_local'          => 1,
                        'id_local'          => Auth::user()->local()->id_local,
                        'id_usuario'        => 1,
                        'id_usuario'        => Auth::user()->id_local,
                        'dia_semana'        => $horaTurno->dia_semana,
                        'id_turno'          => $horaTurno->id,
                        'id_hora_turno'     => $horaTurno->id_hora_turno,
                        'hora_turno_inicio' => $horaTurno->hora_turno_inicio,
                        'hora_turno_fin'    => $horaTurno->hora_turno_fin,
                        'asistencia'        => false,
                        'nombre_usuario'    => Auth::user()->nombre,
                        'fecha_hora'        => Carbon::now()
					));

					$message = 'Turno tomado con exito!';
					$pass = true;
					$left = $left - 1;
				} else {
					if ($left != 0 && $count == $maxEmpaques) {
						$pass = true;
						$left = 0;
					} else {
						if ($count > $maxEmpaques) {
							$pass = false;
							$left = $count;
							$message = 'Error: Cantidad incorrecta de cupos por turno.';
						}
					}
				}
			}
		} catch (Exception $e) {
			$pass = false;
			$message = $e->getMessage();
            Log::error($message);
		}

		$response = array(
			'pass'    => $pass,
			'data'    => array(
				'left'  => $left,
				'taken' => $taken,
				'total' => $maxEmpaques,
			),
			'message' => $message,
		);

		return Response::json($response);
	}
}