<?php

class Falta extends Moloquent
{
	protected $guarded = array();

	protected $connection = 'mongodb';
	protected $collection = 'faltas';
	protected $primaryKey = '_id';

	public static $rules = array(
		'id_falta'       => 'required',
		'id_usuario'     => 'required',
		'falta_leve'     => 'required',
		'falta_media'    => 'required',
		'falta_grave'    => 'required',
		'nombre_usuario' => 'required'
	);

	public function usuario()
	{
		return $this->belongsTo('Usuario', 'id_usuario', 'id_usuario');
	}

	public static function lastID() {
		return Falta::orderBy('created_at', 'DESC')->first()->id_faltas + 1;
	}
}
