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
}