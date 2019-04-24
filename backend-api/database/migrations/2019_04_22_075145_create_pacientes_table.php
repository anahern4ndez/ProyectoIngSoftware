<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('Nombre', 55);
            $table->string('Apellido', 40);
            $table->date("Fecha_de_nacimiento");
            $table->integer("Procedencia");
            $table->string('Nombre_de_padre', 55);
            $table->string('Nombre_de_madre', 55);
            $table->integer('Telefono');
            $table->integer('Edad');
            $table->string('Sindrome_Clinico_Presentacion', 15);
            $table->string('Dx_Definitivo', 200);
            $table->string('Dx_Asociados', 200);
            $table->integer('CUI')->unique();
            $table->string('Imagen', 260);
            $table->integer('Tipo_de_Sangre');
            $table->integer('Estudia');
            $table->integer('Transfusiones');
            $table->integer('EstadoActual');
            $table->integer('Sexo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
