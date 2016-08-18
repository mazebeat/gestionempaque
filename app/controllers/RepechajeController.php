<?php

use Cartalyst\Sentry\Facades\Laravel\Sentry;

class RepechajeController extends JoshController
{
	public function index()
	{
		// Is the user logged in?
//		if (!Sentry::check()) {
//			return View::make('admin.login2');
//		}

		return Redirect::route('turnos');
//		return View::make('admin.login2');
	}

	public function index2()
	{
		// Is the user logged in?
//		if (!Sentry::check()) {
//			return View::make('admin.login');
//		}

		return View::make('admin.turnos.index');
	}


	public function showTurnos()
	{
		// Is the user logged in?
//		if (!Sentry::check()) {
//			return Redirect::to('/');
//		}

		$days = array(
			'lu' => 'Lunes',
			'ma' => 'Martes',
			'mi' => 'Miercoles',
			'ju' => 'Jueves',
			'vi' => 'Viernes',
			'sa' => 'Sabado',
			'do' => 'Domingo',
		);

		$turns = array(
			'08:00 - 09:45',
			'09:50 - 10:35',
			'10:40 - 11:25',
			'11:30 - 12:15',
			'12:20 - 13:05',
			'13:10 - 13:55',
		);

		return View::make('frontend.calendar')->withDays($days)->withTurns($turns);
	}


	public function getTurnos()
	{
		$data = array();

		if (Request::ajax()) {
//			if (!Input::get('take', false)) {
//				$save = true;
//			} else {
//				$save = false;
//			}

//			$id   = Input::get('id');
//			$user = Sentry::getUser()->first_name;
			$data = array(
				'pass' => true,
				//				'save' => $save,
				//				'id'   => $id,
				//				'data' => array(
				//					'first_name' => $user,
				//				)
			);
		}

//		echo json_encode($data);
		return Response::json($data);
	}
} 