<?php

class Provincia extends Moloquent
{
	protected $primaryKey = 'id_pr';
	protected $connection = 'mongodb';
	protected $collection = 'provincia_cl';
}