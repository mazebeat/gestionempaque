<?php

class RegionsController extends JoshController {

	/**
	 * Region Repository
	 *
	 * @var Region
	 */
	protected $region;

	public function __construct(Region $region)
	{
		$this->region = $region;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$regions = $this->region->all();

		return View::make('admin.regions.index', compact('regions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.regions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Region::$rules);

		if ($validation->passes())
		{
			$this->region->create($input);

			return Redirect::route('admin.regions.index');
		}

		return Redirect::route('admin.regions.create')
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
		$region = $this->region->findOrFail($id);

		return View::make('admin.regions.show', compact('region'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$region = $this->region->find($id);

		if (is_null($region))
		{
			return Redirect::route('admin.regions.index');
		}

		return View::make('admin.regions.edit', compact('region'));
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
		$validation = Validator::make($input, Region::$rules);

		if ($validation->passes())
		{
			$region = $this->region->find($id);
			$region->update($input);

			return Redirect::route('admin.regions.show', $id);
		}

		return Redirect::route('admin.regions.edit', $id)
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
		$this->region->find($id)->delete();

		return Redirect::route('admin.regions.index');
	}

}
