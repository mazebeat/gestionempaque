<?php

use Cartalyst\Sentry\Facades\Laravel\Sentry;

class EmpaqueController extends JoshController
{
	public function index()
	{
		// Is the user logged in?
//		if (!Sentry::check()) {
//			return View::make('admin.login2');
//		}

		// Show the page
		return View::make('admin.empaques.index');
	}
}