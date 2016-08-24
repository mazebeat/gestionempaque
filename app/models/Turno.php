<?php

use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Turno extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'turno';
	protected $primaryKey = '_id';
	protected $dates = ['deleted_at'];
	
	
}
