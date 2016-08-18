<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Local extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'local';
	protected $dates      = ['deleted_at'];
}