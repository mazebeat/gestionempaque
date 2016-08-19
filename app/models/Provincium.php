<?php

use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Provincium extends Moloquent
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
	protected $primaryKey = "_id";
	protected $dates      = ['deleted_at'];
}