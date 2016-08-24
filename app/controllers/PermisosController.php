<?php

class PermisosController extends JoshController
{
	
	/**
	 * Permiso Repository
	 *
	 * @var Permiso
	 */
	protected $permiso;
	
	public function __construct(Permiso $permiso)
	{
		$this->permiso = $permiso;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$permisos = $this->permiso->all();
		
		return View::make('admin.permisos.index', compact('permisos'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.permisos.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input      = Input::all();
		$validation = Validator::make($input, Permiso::$rules);
		
		if ($validation->passes()) {
			$this->permiso->create($input);
			
			return Redirect::route('admin.permisos.index');
		}
		
		return Redirect::route('admin.permisos.create')
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
		$permiso = $this->permiso->findOrFail($id);
		
		return View::make('admin.permisos.show', compact('permiso'));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
		$permiso = $this->permiso->find($id);
		
		if (is_null($permiso)) {
			return Redirect::route('admin.permisos.index');
		}
		
		return View::make('permisos.edit', compact('permiso'));
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
		$validation = Validator::make($input, Permiso::$rules);
		
		if ($validation->passes()) {
			$permiso = $this->permiso->find($id);
			$permiso->update($input);
			
			return Redirect::route('admin.permisos.show', $id);
		}
		
		return Redirect::route('admin.permisos.edit', $id)
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
		$this->permiso->find($id)->delete();
		
		return Redirect::route('admin.permisos.index');
	}
	
}
