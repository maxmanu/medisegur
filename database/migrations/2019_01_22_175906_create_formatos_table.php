<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormatosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('formatos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('paciente_id')->unsigned();
			$table->string('edad', 10);
			$table->string('genero');
			$table->string('area', 100)->nullable();
			$table->string('sintoma', 200)->nullable();
			$table->integer('diagnostico_id')->unsigned();
			$table->integer('patologia_id')->unsigned();
			$table->string('imagen')->nullable();
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
		Schema::drop('formatos');
	}

}
