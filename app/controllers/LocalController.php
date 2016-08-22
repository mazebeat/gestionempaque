<?php

class LocalController extends JoshController
{
	/**
	 * Local Repository
	 *
	 * @var Local
	 */
	protected $local;

	public function __construct(Local $local)
	{
		$this->local = $local;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$locals = $this->local->all();

		return View::make('admin.locales.index', compact('locals'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Falta::$rules);

		if ($validation->passes()) {
			$this->local->create($input);

			return Redirect::route('admin.locales.index');
		}

		return Redirect::route('admin.locales.index')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	public function detalle($id = null)
	{
		if (isset($id)) {
			$normas = Norma::all();

			return View::make('admin.locales.detalle', compact('id'),
				compact('normas'))->withDays(self::$days)->withTurns(self::$turns);
		}
	}

	public function addempaque()
	{
	}
}