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
            
            $table->increments('id');
            $table->string('Numero_expediente') -> unique();
            $table->string('CUI', 20) -> unique();
            $table->string('Nombre', 55);
            $table->string('Apellido', 40);
            $table->date("Fecha_de_nacimiento");
            $table->integer("Procedencia");
            $table->integer("Residencia");
            $table->string('Nombre_de_padre', 55);
            $table->string('Nombre_de_madre', 55);
            $table->integer('Telefono');
            $table->float('Edad');
            $table->integer('Sindrome_Clinico_Presentacion');
            $table->longText('Dx_Definitivo');
            $table->longText('Dx_Asociados');
            $table->string('Historia');
            $table->longText('Imagen')->nullable();
            $table->integer('Tipo_de_Sangre');
            $table->integer('Estudia');
            $table->integer('Transfusiones');
            $table->integer('EstadoActual');
            $table->integer('Sexo');
            $table->timestamps();

            $table->foreign('Sexo')
            ->references('ID')
            ->on('sexo');

            $table->foreign('Transfusiones')
            ->references('ID')
            ->on('tipo_respuestas');

            $table->foreign('Procedencia')
            ->references('ID')
            ->on('procedencias');

            $table->foreign('Residencia')
            ->references('ID')
            ->on('procedencias');

            $table->foreign('Estudia')
            ->references('ID')
            ->on('tipo_respuestas');

            $table->foreign('Tipo_de_Sangre')
            ->references('ID')
            ->on('tipo_sangre');

            $table->foreign('EstadoActual')
            ->references('ID')
            ->on('estados');

            $table->foreign('Sindrome_Clinico_Presentacion')
            ->references('ID')
            ->on('sindrome_cie-10');
         
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
