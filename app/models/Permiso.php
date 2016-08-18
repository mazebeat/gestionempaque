<?php

class Permiso extends Moloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'permisos';
	protected $dates      = ['deleted_at'];
}