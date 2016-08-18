<?php

class Comuna extends Moloquent
{
	protected $primaryKey = 'id_co';
	protected $connection = 'mongodb';
	protected $collection = 'comuna_cl';
}