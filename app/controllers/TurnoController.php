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


	public function showTurnos()
	{
		return View::make('frontend.calendar')->withDays(self::$days)->withTurns(self::$turns);
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
}