<?php

class CasaestudiosController extends JoshController
{
	
	/**
	 * CasaEstudio Repository
	 *
	 * @var CasaEstudio
	 */
	protected $casaEstudio;
	
	public function __construct(CasaEstudio $casaEstudio)
	{
		$this->casaEstudio = $casaEstudio;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$casaestudios = $this->casaEstudio->all();
		
		return View::make('admin.casaestudios.index', compact('casaestudios'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.casaestudios.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input      = Input::all();
		$validation = Validator::make($input, CasaEstudio::$rules);
		
		if ($validation->passes()) {
			$this->casaEstudio->create($input);
			
			return Redirect::route('admin.casaestudios.index');
		}
		
		return Redirect::route('admin.casaestudios.create')
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
		$casaEstudio = $this->casaEstudio->findOrFail($id);
		
		return View::make('admin.casaestudios.show', compact('casaEstudio'));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
		$casaEstudio = $this->casaEstudio->find($id);
		
		if (is_null($casaEstudio)) {
			return Redirect::route('admin.casaestudios.index');
		}
		
		return View::make('admin.casaestudios.edit', compact('casaEstudio'));
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
		$validation = Validator::make($input, CasaEstudio::$rules);
		
		if ($validation->passes()) {
			$casaEstudio = $this->casaEstudio->find($id);
			$casaEstudio->update($input);
			
			return Redirect::route('admin.casaestudios.show', $id);
		}
		
		return Redirect::route('admin.casaestudios.edit', $id)
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
		$this->casaEstudio->find($id)->delete();
		
		return Redirect::route('admin.casaestudios.index');
	}
	
}
