<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Pass extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'pass';
	protected $primaryKey = "_id";
	protected $dates      = ['deleted_at'];
}