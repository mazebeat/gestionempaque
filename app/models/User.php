<?php

use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserTrait;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Jenssegers\Mongodb\Sentry\User as SentryUserModel;

class User extends SentryUserModel
{
	
	use UserTrait, RemindableTrait;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	/**
	 * To allow soft deletes
	 */
	use SoftDeletingTrait;
	
	protected $dates = ['deleted_at'];
	
}
