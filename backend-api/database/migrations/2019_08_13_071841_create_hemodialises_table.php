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
            $table->bigIncrements('id');
            
            $table->integer('idPaciente');
            $table->date('fecha');
            $table->integer('No-Hemodialisis');
            $table->integer('LugarDeProcedencia');
            $table->integer('TipoDeHemodialisis');
            $table->json("Via");
            $table->integer('LineasPediatrica');
            $table->integer('Filtro');
            $table->integer('FlujoDializante');
            $table->float('FlujoDeSangre');
            $table->float('UF');
            $table->float('Heparinizacion_de_cebado');
            $table->float('Heparinizacion_Trans-dialisis');
            $table->integer('TiempoH');
            $table->integer('TiempoM');
            $table->float('Conductividad_Na+');
            $table->float('Conductividad_K');
            $table->float('Conductividad_HCO3');
            $table->float('PesoPre');
            $table->float('PesoPost');
            $table->float('Talla');
            $table->float('PesoDelta');
            $table->string('Especiales');
            $table->json('Tabla1');
            $table->string('Observaciones');
            $table->integer('Tecnico');
            $table->integer('PA');
            $table->json('Tabla2');
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
