<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario');
            $table->foreign('idUsuario')
            ->references('id')
            ->on('users');
            
            $table->integer('idPaciente');
            $table->foreign('idPaciente')
            ->references('id')
            ->on('pacientes');

            $table->date('fecha');
            $table->time('hora');
            $table->integer('estado');
            $table->foreign('estado')
            ->references('id')
            ->on('codigocitas');
            $table->integer('tipoCitaID');
            $table->foreign('tipoCitaID')
            ->references('id')
            ->on('tipo_citas');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
