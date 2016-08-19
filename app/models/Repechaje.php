<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Repechaje extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'repechaje';
	protected $primaryKey = "_id";
	protected $dates      = ['deleted_at'];
}