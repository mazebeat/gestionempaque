<?php
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait as SoftDeletes;

class Pass extends Moloquent
{
	use SoftDeletes;
	protected $connection = 'mongodb';
	protected $collection = 'pass';
	protected $primaryKey = "_id";
	protected $dates = ['deleted_at'];

	public static $rules = array(
		'pass'                  => 'required|min:3|confirmed',
		'password_confirmation' => 'required|min:3|same:pass'
	);
}