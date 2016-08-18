<?php

use Cartalyst\Sentry\Facades\Laravel\Sentry;

class EmpaqueController extends JoshController
{
	public function index()
	{
		$locales = Local::lists('nom_local', 'id_local');
		$empaques = Usuario::all();
		return View::make('admin.empaques.index')->withEmpaques($empaques)->withLocales($locales);
	}

	public function search() {}
}