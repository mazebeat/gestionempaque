<?php

class ProvinciaController extends JoshController
{

	/**
	 * Provincium Repository
	 *
	 * @var Provincium
	 */
	protected $provincium;

	public function __construct(Provincia $provincium)
	{
		$this->provincium = $provincium;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$provincia = $this->provincium->all();

		return View::make('admin.provincia.index', compact('provincia'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.provincia.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Provincium::$rules);

		if ($validation->passes()) {
			$this->provincium->create($input);

			return Redirect::route('admin.provincia.index');
		}

		return Redirect::route('admin.provincia.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$provincium = $this->provincium->findOrFail($id);

		return View::make('admin.provincia.show', compact('provincium'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$provincium = $this->provincium->find($id);

		if (is_null($provincium)) {
			return Redirect::route('admin.provincia.index');
		}

		return View::make('admin.provincia.edit', compact('provincium'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Provincia::$rules);

		if ($validation->passes()) {
			$provincium = $this->provincium->find($id);
			$provincium->update($input);

			return Redirect::route('admin.provincia.show', $id);
		}

		return Redirect::route('admin.provincia.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->provincium->find($id)->delete();

		return Redirect::route('admin.provincia.index');
	}

}
