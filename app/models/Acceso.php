<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Acceso extends Moloquent
{
	use SoftDeletes;
	public static $rules      = [
		'id_acceso'      => '',
		'nom_acceso'     => '',
		'nombre_usuario' => '',
		'fecha_hora'     => 'date'
	];
	protected     $connection = 'mongodb';
	protected     $collection = 'acceso';
	protected     $primaryKey = "_id";
	protected     $dates      = ['deleted_at'];
}
