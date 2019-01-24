<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysVoyager extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table( 'formatos', function (Blueprint $table) {
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('diagnostico_id')->references('id')->on('diagnosticos');
            $table->foreign('patologia_id')->references('id')->on('patologias');
        });
        Schema::table( 'asistencias', function (Blueprint $table) {
            $table->foreign('medico_id')->references('id')->on('medicos');
        });
        Schema::table( 'pacientes', function (Blueprint $table) {
            $table->foreign('sede_id')->nullable()->references('id')->on('sedes');
            $table->foreign('empresa_id')->nullable()->references('id')->on('empresas');
        });
        Schema::table( 'sedes', function (Blueprint $table) {
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
