<?php

use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class TomaTurno extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'toma_turno';
	protected $primaryKey = '_id';
	protected $dates      = ['deleted_at'];

	public function usuario()
	{
		return $this->belongsTo('Usuario');
	}
}
