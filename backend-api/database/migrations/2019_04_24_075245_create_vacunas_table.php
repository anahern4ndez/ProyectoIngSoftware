<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacunas', function (Blueprint $table) {
            $table->integer('idPaciente');
            
            $table->integer('BCG');
            $table->integer('Poliovirus');
            $table->integer('Hepatitis A');
            $table->integer('Hepatitis B');
            $table->integer('Neumococo');
            $table->integer('Influenza');
            $table->integer('DPT');
            $table->integer('SPR');

            $table->foreign('idPaciente')
            ->references('CUI')
            ->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacunas');
    }
}
