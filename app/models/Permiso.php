<?php

class Permiso extends Moloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'permisos';
	protected $primaryKey = "_id";
	protected $dates = ['deleted_at'];
}