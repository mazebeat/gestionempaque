<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class TurnoRegalado extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'turno_regalado';
	protected $dates      = ['deleted_at'];
}