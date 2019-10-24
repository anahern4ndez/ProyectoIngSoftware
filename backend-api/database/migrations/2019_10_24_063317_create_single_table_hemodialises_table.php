<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSingleTableHemodialisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_table_hemodialises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('idPaciente');
            $table->string('P_A');
            $table->string('Pulso');
            $table->string('Temp');
            $table->string('QB');
            $table->string('PV');
            $table->string('PA');
            $table->string('UFH');
            $table->string('Medicamentos');

            $table-> foreign('idPaciente')
                ->references('id')
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
        Schema::dropIfExists('single_table_hemodialises');
    }
}
