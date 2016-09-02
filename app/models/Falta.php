<?php

class Falta extends Moloquent
{

	protected $connection = 'mongodb';
	protected $collection = 'faltas';
	protected $primaryKey = '_id';
	protected $dates = ['fecha_hora', 'created_at', 'updated_at', 'deleted_at'];
	protected $fillable = array(
		'id_falta',
		'id_usuario',
		'falta_leve',
		'falta_media',
		'falta_grave',
		'nombre_usuario',
	);
	public static $rules = array(
		'id_falta'       => 'required',
		'id_usuario'     => 'required',
		'falta_leve'     => 'required',
		'falta_media'    => 'required',
		'falta_grave'    => 'required',
		'nombre_usuario' => 'required',
	);

	public function usuario()
	{
		return $this->belongsTo('Usuario', 'id_usuario', 'id_usuario');
	}

	public function lastID()
	{
		return $this->orderBy('created_at', 'DESC')->first()->id_faltas + 1;
	}

	public function getDefault($id_usuario = null)
	{
		if (!is_null($id_usuario)) {
			return $this->create(array(
				'id_usuario'  => $id_usuario,
				'falta_leve'  => 0,
				'falta_media' => 0,
				'falta_grave' => 0,
			));
		}

		return null;
	}

	public function toHTML()
	{
		return '[<a href="#" data-toggle="tooltip" data-placement="top" title="Falta Leve">' . $this->falta_leve . '</a>][<a href="#" data-toggle="tooltip" data-placement="top" title="Falta Media">' . $this->falta_media . '</a>][<a href="#" data-toggle="tooltip" data-placement="top" title="Falta Grave">' . $this->falta_grave . '</a>]';
	}
}
