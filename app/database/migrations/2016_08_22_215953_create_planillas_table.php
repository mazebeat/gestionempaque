<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlanillasTable extends Migration
{
	
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('planillas', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('id_planilla');
			$table->integer('id_local');
			$table->string('nombre_usuario');
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
		Schema::drop('planillas');
	}
	
}
