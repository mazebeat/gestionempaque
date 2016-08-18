<?php

class Region extends Moloquent
{
	protected $primaryKey = 'id_re';
	protected $connection = 'mongodb';
	protected $collection = 'region_cl';
}