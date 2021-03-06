<?php

class LocalsController extends JoshController
{
	
	/**
	 * Local Repository
	 *
	 * @var Local
	 */
	protected $local;
	
	public function __construct(Local $local)
	{
		$this->local = $local;
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$locals = $this->local->all();
		
		return View::make('admin.locals.index', compact('locals'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.locals.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input      = Input::all();
		$validation = Validator::make($input, Local::$rules);
		
		if ($validation->passes()) {
			$this->local->create($input);
			
			return Redirect::route('admin.locals.index');
		}
		
		return Redirect::route('admin.locals.create')
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
		$local = $this->local->findOrFail($id);
		
		return View::make('locals.show', compact('local'));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function edit($id)
	{
		$local = $this->local->find($id);
		
		if (is_null($local)) {
			return Redirect::route('admin.locals.index');
		}
		
		return View::make('admin.locals.edit', compact('local'));
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
		$validation = Validator::make($input, Local::$rules);
		
		if ($validation->passes()) {
			$local = $this->local->find($id);
			$local->update($input);
			
			return Redirect::route('admin.locals.show', $id);
		}
		
		return Redirect::route('admin.locals.edit', $id)
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
		$this->local->find($id)->delete();
		
		return Redirect::route('admin.locals.index');
	}
	
}
