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
            $table->integer("Via");
            $table->integer('LineasPediatrica');
            $table->integer('Filtro');
            $table->integer('FlujoDializante');
            $table->float('FlujoDeSangre');
            $table->float('UF');
            //$table->float('Heparinizacion_de_cebado');
            //$table->float('Heparinizacion_TransDialisis');
            $table->integer('Heparinizacion');
            $table->integer('TiempoH');
            $table->integer('TiempoM');
            $table->float('Conductividad_Na');
            $table->float('Conductividad_K');
            $table->float('Conductividad_HCO3');
            $table->float('PesoPre');
            $table->float('PesoPost');
            $table->float('Talla');
            $table->float('PesoDelta');
            $table->string('Especiales');
            $table->date('Fecha_col_cat');
            //tabla 1
            /*$table->string("PA_str");
            $table->string("Pulso");
            $table->string("Temp");
            $table->string("QB");
            $table->string("PV");
            $table->string("PA_table");
            $table->string("UFH");
            $table->string("Medicamentos");
            $table->string("UFTotal")->nullable();*/
            //fin tabla 1
            $table->string('Observaciones');
            /*$table->integer('Tecnico');
            $table->integer('PA');*/
            //$table->jsonb('Tabla2');
            //tabla 2
            $table->jsonb("T2Fecha");
            $table->jsonb("T2Pre");
            $table->jsonb("T2Post");
            $table->jsonb("T2Urr");
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
