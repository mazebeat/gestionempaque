<?php

class Provincia extends Moloquent
{
	protected $connection = 'mongodb';
	protected $primaryKey = "_id";
	protected $collection = 'provincia_cl';
	protected $fillable = array(

	);
}