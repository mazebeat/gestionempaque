<?php

class Planilla extends Moloquent
{
	protected $guarded = array();

	protected $connection = 'mongodb';
	protected $collection = 'planilla';
	protected $primaryKey = '_id';
	protected $dates = ['fecha_hora', 'created_at', 'updated_at', 'deleted_at'];

	public static $rules = array(
		'id_planilla'    => 'required',
		'id_local'       => 'required',
		'nombre_usuario' => 'required',
		'fecha_hora'     => 'required'
	);

	public function local()
	{
		return $this->belongsTo('Local', 'id_local', 'id_local');
	}

	public function lastID()
	{
		return $this->orderBy('created_at', 'DESC')->first()->id_planilla + 1;
	}
}
