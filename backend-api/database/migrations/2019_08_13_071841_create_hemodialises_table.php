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
            $table->date('FechaHemodialisis');
            $table->integer('NoHemodialisis');
            $table->integer('LugarDeProcedencia');
            $table->integer('TipoDeHemodialisis');
            $table->json('Via');
            $table->float('LineasPediatrica');
            $table->float('Filtro');
            $table->integer('FlujoDializante');
            $table->float('FlujoDeSangre');
            $table->float('UF');
            $table->json('Heparinizacion');
            $table->json('Tiempo');
            $table->json('Conductividad');
            $table->float('PesoPre');
            $table->float('PesoPost');
            $table->float('Talla');
            $table->float('PesoDelta');
            $table->string('Especiales');
            $table->string('Observaciones');
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
