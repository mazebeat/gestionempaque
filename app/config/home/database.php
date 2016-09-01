<?php

return array(
	
	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/
	
	'connections' => array(
		
		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'gestionempaques',
			'username'  => 'root',
			'password'  => 'mz.120712',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
		
		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'homestead',
			'username' => 'homestead',
			'password' => 'secret',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),

		'mongodb1' => array(
			'driver'   => 'mongodb',
			'host'     => '104.197.168.83',
			'port'     => '27017',
			'database' => 'snt',
			'username' => 'admin_db',
			'password' => 'Acces0.DB.GestionEmpaque',
			'options'  => array(
				'db' => 'admin',
			),
		),

		'mongodb' => array(
			'driver'   => 'mongodb',
			'host'     => 'localhost',
			'port'     => '27017',
			'database' => 'snt',
			'username' => 'admin_db',
			'password' => 'Acces0.DB.GestionEmpaque',
			'options'  => array(
				'db' => 'snt',
			),
		),
	
	),

);
