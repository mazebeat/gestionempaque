<?php

class EmpaquesController extends BaseController {

	/**
	 * Empaque Repository
	 *
	 * @var Empaque
	 */
	protected $empaque;

	public function __construct(Empaque $empaque)
	{
		$this->empaque = $empaque;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$empaques = $this->empaque->all();

		return View::make('empaques.index', compact('empaques'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('empaques.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Empaque::$rules);

		if ($validation->passes())
		{
			$this->empaque->create($input);

			return Redirect::route('empaques.index');
		}

		return Redirect::route('empaques.create')
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
		$empaque = $this->empaque->findOrFail($id);

		return View::make('empaques.show', compact('empaque'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$empaque = $this->empaque->find($id);

		if (is_null($empaque))
		{
			return Redirect::route('empaques.index');
		}

		return View::make('empaques.edit', compact('empaque'));
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
		$validation = Validator::make($input, Empaque::$rules);

		if ($validation->passes())
		{
			$empaque = $this->empaque->find($id);
			$empaque->update($input);

			return Redirect::route('empaques.show', $id);
		}

		return Redirect::route('empaques.edit', $id)
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
		$this->empaque->find($id)->delete();

		return Redirect::route('empaques.index');
	}

}
