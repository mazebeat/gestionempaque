<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Perfil extends Moloquent
{
	use SoftDeletes;
	public static $rules = array(
		'id_perfil'     => 'required',
		'nom_perfil'    => 'required',
		'nombre_perfil' => 'required',
		'fecha_hora'    => 'required',
	);
	protected $connection = 'mongodb';
	protected $collection = 'perfil';
	protected $primaryKey = "_id";
	protected $dates = ['deleted_at'];
}