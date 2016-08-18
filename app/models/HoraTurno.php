<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class HoraTurno extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'hora_turno';
	protected $dates      = ['deleted_at'];
}