<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Usuario extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'usuario';
	protected $dates      = ['deleted_at'];
}