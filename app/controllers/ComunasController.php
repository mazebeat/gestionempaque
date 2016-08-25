<?php

class ComunasController extends JoshController
{
	
	/**
	 * Comuna Repository
	 *
	 * @var Comuna
	 */
	protected $comuna;
	
	public function __construct(Comuna $comuna)
	{
		$this->comuna = $comuna;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$comunas = $this->comuna->all();
		
		return View::make('admin.comunas.index', compact('comunas'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.comunas.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input      = Input::all();
		$validation = Validator::make($input, Comuna::$rules);
		
		if ($validation->passes()) {
			$this->comuna->create($input);
			
			return Redirect::route('admin.comunas.index');
		}
		
		return Redirect::route('admin.comunas.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function show($id)
	{
		$comuna = $this->comuna->findOrFail($id);
		
		return View::make('admin.comunas.show', compact('comuna'));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
//		dd($id);
		$comuna = $this->comuna->find($id);
//		dd($comuna);
		if (is_null($comuna)) {
			return Redirect::route('admin.comunas.index');
		}
		
		return View::make('admin.comunas.edit', compact('comuna'));
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function update($id)
	{
		$input      = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Comuna::$rules);
		
		if ($validation->passes()) {
			$comuna = $this->comuna->find($id);
			$comuna->update($input);
			
			return Redirect::route('admin.comunas.show', $id);
		}
		
		return Redirect::route('admin.comunas.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->comuna->find($id)->delete();
		
		return Redirect::route('admin.comunas.index');
	}
	
}
