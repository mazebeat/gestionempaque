<?php

class Falta extends Moloquent
{
	protected $guarded = array();

	protected $connection = 'mongodb';
	protected $collection = 'faltas';
	// protected $dates      = ['deleted_at'];

	public static $rules = array(
		'id_falta'       => 'required',
		'id_usuario'     => 'required',
		'falta_leve'     => 'required',
		'falta_media'    => 'required',
		'falta_grave'    => 'required',
		'nombre_usuario' => 'required'
	);
}
