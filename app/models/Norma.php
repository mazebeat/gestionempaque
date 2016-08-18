<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Norma extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'norma';
	protected $dates      = ['deleted_at','fecha_hora'];
}