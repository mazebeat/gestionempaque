<?php

class Empaque extends Eloquent
{
	protected $guarded = array();

	public static $rules = array(
		'id_usuario'       => 'required',
		'nombre'           => 'required',
		'ape_paterno'      => 'required',
		'ape_materno'      => 'required',
		'id_region'        => 'required',
		'id_provincia'     => 'required',
		'id_comuna'        => 'required',
		'direccion'        => 'required',
		'telefono'         => 'required',
		'email'            => 'required',
		'sexo'             => 'required',
		'fecha_nacimiento' => 'required',
		'id_casa_estudio'  => 'required',
		'id_perfil'        => 'required',
		'id_local'         => 'required',
		'bloqueado'        => 'required',
		'nombre_usuario'   => 'required',
		'fecha_hora'       => 'required'
	);
}
