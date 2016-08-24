<?php

class FaltasController extends JoshController
{
	
	/**
	 * Falta Repository
	 *
	 * @var Falta
	 */
	protected $falta;
	
	public function __construct(Falta $falta)
	{
		$this->falta = $falta;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$faltas = $this->falta->all();
		
		return View::make('admin.faltas.index', compact('faltas'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.faltas.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input      = Input::all();
		$validation = Validator::make($input, Falta::$rules);
		
		if ($validation->passes()) {
			$this->falta->create($input);
			
			return Redirect::route('admin.faltas.index');
		}
		
		return Redirect::route('admin.faltas.create')
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
		$falta = $this->falta->findOrFail($id);
		
		return View::make('admin.faltas.show', compact('falta'));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
		$falta = $this->falta->find($id);
		
		if (is_null($falta)) {
			return Redirect::route('admin.faltas.index');
		}
		
		return View::make('admin.faltas.edit', compact('falta'));
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
		$validation = Validator::make($input, Falta::$rules);
		
		if ($validation->passes()) {
			$falta = $this->falta->find($id);
			$falta->update($input);
			
			return Redirect::route('admin.faltas.show', $id);
		}
		
		return Redirect::route('admin.faltas.edit', $id)
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
		$this->falta->find($id)->delete();
		
		return Redirect::route('admin.faltas.index');
	}
	
}
