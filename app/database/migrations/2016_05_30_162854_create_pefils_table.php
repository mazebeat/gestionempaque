<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePefilsTable extends Migration
{
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pefils', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_perfil');
			$table->string('nom_perfil');
			$table->string('nombre_perfil');
			$table->date('fecha_hora');
			$table->timestamps();
		});
	}
	
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pefils');
	}
	
}
