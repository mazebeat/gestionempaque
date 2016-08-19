<?php

class Region extends Moloquent
{
//	protected $primaryKey = 'id_re';
	protected $connection = 'mongodb';
	protected $primaryKey = "_id";
	protected $collection = 'region_cl';
}