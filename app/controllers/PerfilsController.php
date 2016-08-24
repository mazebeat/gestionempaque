<?php

class PerfilsController extends JoshController
{
	
	/**
	 * Perfil Repository
	 *
	 * @var Perfil
	 */
	protected $perfil;
	
	public function __construct(Perfil $perfil)
	{
		$this->perfil = $perfil;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$perfils = $this->perfil->all();
		
		return View::make('admin.perfils.index', compact('perfils'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.perfils.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input      = Input::all();
		$validation = Validator::make($input, Perfil::$rules);
		
		if ($validation->passes()) {
			$this->perfil->create($input);
			
			return Redirect::route('admin.perfils.index');
		}
		
		return Redirect::route('admin.perfils.create')
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
		$perfil = $this->perfil->findOrFail($id);
		
		return View::make('admin.perfils.show', compact('perfil'));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
		$perfil = $this->perfil->find($id);
		
		if (is_null($perfil)) {
			return Redirect::route('admin.perfils.index');
		}
		
		return View::make('admin.perfils.edit', compact('perfil'));
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
		$validation = Validator::make($input, Perfil::$rules);
		
		if ($validation->passes()) {
			$perfil = $this->perfil->find($id);
			$perfil->update($input);
			
			return Redirect::route('admin.perfils.show', $id);
		}
		
		return Redirect::route('admin.perfils.edit', $id)
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
		$this->perfil->find($id)->delete();
		
		return Redirect::route('admin.perfils.index');
	}
	
}
