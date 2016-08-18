<?php

class RepechajesController extends JoshController {

	/**
	 * Repechaje Repository
	 *
	 * @var Repechaje
	 */
	protected $repechaje;

	public function __construct(Repechaje $repechaje)
	{
		$this->repechaje = $repechaje;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$repechajes = $this->repechaje->all();

		return View::make('admin.repechajes.index', compact('repechajes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.epechajes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Repechaje::$rules);

		if ($validation->passes())
		{
			$this->repechaje->create($input);

			return Redirect::route('admin.repechajes.index');
		}

		return Redirect::route('admin.repechajes.create')
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
		$repechaje = $this->repechaje->findOrFail($id);

		return View::make('admin.repechajes.show', compact('repechaje'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$repechaje = $this->repechaje->find($id);

		if (is_null($repechaje))
		{
			return Redirect::route('admin.repechajes.index');
		}

		return View::make('admin.repechajes.edit', compact('repechaje'));
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
		$validation = Validator::make($input, Repechaje::$rules);

		if ($validation->passes())
		{
			$repechaje = $this->repechaje->find($id);
			$repechaje->update($input);

			return Redirect::route('admin.repechajes.show', $id);
		}

		return Redirect::route('admin.repechajes.edit', $id)
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
		$this->repechaje->find($id)->delete();

		return Redirect::route('admin.repechajes.index');
	}

}
