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
        Schema::dropIfExists('vacunas');

        Schema::create('vacunas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            
            $table->string('idPaciente', 20);
            
            $table->integer('BCG');
            $table->integer('Poliovirus');
            $table->integer('HepatitisA');
            $table->integer('HepatitisB');
            $table->integer('Neumococo');
            $table->integer('Influenza');
            $table->integer('DPT');
            $table->integer('SPR');
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
