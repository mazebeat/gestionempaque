<?php

use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class TomaTurno extends Eloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'toma_turno';
	protected $dates      = ['deleted_at'];
}
