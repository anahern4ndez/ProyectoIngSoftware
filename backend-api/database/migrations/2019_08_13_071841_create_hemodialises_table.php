<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHemodialisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hemodialises', function (Blueprint $table) {
            $table->integer('IdPaciente');
            $table->foreign('IdPaciente')
            -> references('id')
            -> on('pacientes');

            $table->integer('Estado');
            $table->foreign('Estado')
            -> references('EstadoActual')
            -> on('pacientes');

            $table->time('HoraEstimada');
            $table->time('HoraServicio');
            
            $table->integer('IdDoctor');
            $table->foreign('IdDoctor')
            -> references('id')
            -> on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hemodialises');
    }
}
