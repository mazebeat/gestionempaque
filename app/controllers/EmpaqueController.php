<?php

class EmpaqueController extends JoshController
{

	protected $empaque;

	public function __construct(Usuario $empaque)
	{
		$this->empaque = $empaque;
	}


	public function index()
	{
		$locales = Local::lists('nom_local', 'id_local');
		$empaques = $this->empaque->all();

		return View::make('admin.empaques.index', compact('empaques'))->withLocales($locales);
	}

	public function create()
	{
		return View::make('admin.empaques.create');
	}

	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Usuario::$rules, Usuario::$messages);

		if ($validation->passes()) {

			if (Input::has('frontend') && !Input::has('accept_terms')) {
				return Redirect::to('registry')
					->withInput()
					->with('message', 'Debe aceptar los terminos para poder continuar.');
			}

			if (Input::has('accept_terms') && Input::get('accept_terms') != 'yes') {
				return Redirect::to('registry')
					->withInput()
					->with('message', 'Aceptación de terminos de modo incorrecto.');
			}

			$pass = Input::has('pass') ? Input::get('pass') : '123456';

			$this->empaque->create($input);

			if (Input::has('frontend')) {
				return Redirect::to('/')
					->with('message', 'Ya estás registrado, pronto nos contactaremos contigo.')
					->with('type', 'success');
			}

			return Redirect::route('admin.empaques.index');
		}

		if (Input::has('frontend')) {
			return Redirect::to('registry')
				->withInput()
				->withErrors($validation)
				->with('message', 'Debe validar los siguientes errores.');
		}

		return Redirect::route('admin.empaques.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'Debe validar los siguientes errores.');
	}

	public function search()
	{
		$empaques = null;

		if (Input::has('id_local') && Input::has('id_usuario')) {
			$empaques = Usuario::where('id_usuario', Input::get('id_usuario'))->where('id_local',
				(int)Input::get('id_local'))->get();
		} else {
			if (Input::has('id_local') && !Input::has('id_usuario')) {
				$empaques = Usuario::where('id_local', (int)Input::get('id_local'))->get();
			} else {
				if (!Input::has('id_local') && Input::has('id_usuario')) {
					$empaques = Usuario::where('id_usuario', Input::get('id_usuario'))->get();
				} else {
					$empaques = $this->empaque->all();
				}
			}
		}

		$locales = Local::lists('nom_local', 'id_local');

		return View::make('admin.empaques.index')->withEmpaques($empaques)->withLocales($locales)->withInput(Input::except('_token'));
	}

	public function show($id)
	{
		$empaque = $this->empaque->findOrFail($id);

		return View::make('admin.empaques.show', compact('empaque'));
	}

	public function edit($id)
	{
		$empaque = $this->empaque->find($id);
//        $empaque->fecha_nacimeinto = new MongoDate(strtotime($empaque->fecha_nacimiento->sec));

		if (is_null($empaque)) {
			return Redirect::route('admin.empaques.index');
		}

		return View::make('admin.empaques.edit', compact('empaque'));
	}

	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Usuario::$rules);

		if ($validation->passes()) {
			$empaque = $this->empaque->find($id);
			$empaque->update($input);

			return Redirect::route('admin.empaques.show', $id);
		}

		return Redirect::route('admin.empaques.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}


	public function destroy($id)
	{
		$this->empaque->find($id)->delete();

		return Redirect::route('admin.empaques.index');
	}

	// TODO: Crear metodo para generar nombre usuario
	public static function generateUsername(Usuario $usuario)
	{
		return \Str::genUsername($usuario);
	}

}