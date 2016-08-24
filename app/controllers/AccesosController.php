<?php

class AccesosController extends JoshController
{
	
	/**
	 * Acceso Repository
	 *
	 * @var Acceso
	 */
	protected $acceso;
	
	public function __construct(Acceso $acceso)
	{
		$this->acceso = $acceso;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$accesos = $this->acceso->all();
		
		return View::make('admin.accesos.index', compact('accesos'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.accesos.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input      = Input::all();
		$validation = Validator::make($input, Acceso::$rules);
		
		if ($validation->passes()) {
			$this->acceso->create($input);
			
			return Redirect::route('admin.accesos.index');
		}
		
		return Redirect::route('admin.accesos.create')
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
		$acceso = $this->acceso->findOrFail($id);
		
		return View::make('admin.accesos.show', compact('acceso'));
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
		$acceso = $this->acceso->find($id);
		
		if (is_null($acceso)) {
			return Redirect::route('admin.accesos.index');
		}
		
		return View::make('admin.accesos.edit', compact('acceso'));
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
		$input      = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Acceso::$rules);
		
		if ($validation->passes()) {
			$acceso = $this->acceso->find($id);
			$acceso->update($input);
			
			return Redirect::route('admin.accesos.show', $id);
		}
		
		return Redirect::route('admin.accesos.edit', $id)
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
		$this->acceso->find($id)->delete();
		
		return Redirect::route('admin.accesos.index');
	}
	
}
