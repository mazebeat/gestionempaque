<?php

class PlanillasController extends BaseController
{
	
	/**
	 * Planilla Repository
	 *
	 * @var Planilla
	 */
	protected $planilla;
	
	public function __construct(Planilla $planilla)
	{
		$this->planilla = $planilla;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$planillas = $this->planilla->all();
		
		return View::make('planillas.index', compact('planillas'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('planillas.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input      = Input::all();
		$validation = Validator::make($input, Planilla::$rules);
		
		if ($validation->passes()) {
			$this->planilla->create($input);
			
			return Redirect::route('planillas.index');
		}
		
		return Redirect::route('planillas.create')
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
		$planilla = $this->planilla->findOrFail($id);
		
		return View::make('planillas.show', compact('planilla'));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
		$planilla = $this->planilla->find($id);
		
		if (is_null($planilla)) {
			return Redirect::route('planillas.index');
		}
		
		return View::make('planillas.edit', compact('planilla'));
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
		$validation = Validator::make($input, Planilla::$rules);
		
		if ($validation->passes()) {
			$planilla = $this->planilla->find($id);
			$planilla->update($input);
			
			return Redirect::route('planillas.show', $id);
		}
		
		return Redirect::route('planillas.edit', $id)
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
		$this->planilla->find($id)->delete();
		
		return Redirect::route('planillas.index');
	}
	
}
