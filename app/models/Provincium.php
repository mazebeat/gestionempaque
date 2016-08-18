<?php

use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Provincium extends Eloquent
{
	public static $rules = array(
		'id_pr'           => 'required',
		'id_re'           => 'required',
		'str_descripcion' => 'required',
		'num_comunas'     => 'required'
	);
	protected $guarded = array();
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'region_cl';
	protected $dates      = ['deleted_at'];
}