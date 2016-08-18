<?php

class NormasController extends JoshController {

	/**
	 * Norma Repository
	 *
	 * @var Norma
	 */
	protected $norma;

	public function __construct(Norma $norma)
	{
		$this->norma = $norma;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$normas = $this->norma->all();

		return View::make('admin.normas.index', compact('normas'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index2()
	{
		$normas = $this->norma->all();

		return View::make('admin.normas.iindex', compact('normas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.normas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Norma::$rules);

		if ($validation->passes())
		{
			$this->norma->create($input);

			return Redirect::route('admin.normas.index');
		}

		return Redirect::route('admin.normas.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$norma = $this->norma->findOrFail($id);

		return View::make('admin.normas.show', compact('norma'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$norma = $this->norma->find($id);

		if (is_null($norma))
		{
			return Redirect::route('admin.normas.index');
		}

		return View::make('admin.normas.edit', compact('norma'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Norma::$rules);

		if ($validation->passes())
		{
			$norma = $this->norma->find($id);
			$norma->update($input);

			return Redirect::route('admin.normas.show', $id);
		}

		return Redirect::route('admin.normas.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->norma->find($id)->delete();

		return Redirect::route('admin.normas.index');
	}

}
