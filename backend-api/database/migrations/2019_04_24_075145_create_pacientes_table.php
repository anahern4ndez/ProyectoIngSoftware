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
            $table->string('CUI', 20) -> unique();
            $table->string('Nombre', 55);
            $table->string('Apellido', 40);
            $table->date("Fecha_de_nacimiento");
            $table->integer("Procedencia");
            $table->string('Nombre_de_padre', 55);
            $table->string('Nombre_de_madre', 55);
            $table->integer('Telefono');
            $table->float('Edad');
            $table->integer('Sindrome_Clinico_Presentacion');
            $table->string('Dx_Definitivo', 200);
            $table->string('Dx_Asociados', 200);
            $table->string('Imagen', 260);
            $table->integer('Tipo_de_Sangre');
            $table->integer('Estudia');
            $table->integer('Transfusiones');
            $table->integer('EstadoActual');
            $table->integer('Sexo');
            $table->timestamps();
            //los siguientes campos están aquí tentativamente, se verá más adelante si mejor se mueven a otra tabla
            $table->float('Kg_perc');
            $table->float('Peso');
            $table->integer('Percentil');
            $table->float('Talla');
            $table->float('Cms_perc');
            $table->float('PA');
            $table->string('Historia');

            $table->foreign('Sexo')
            ->references('ID')
            ->on('sexo');

            $table->foreign('Transfusiones')
            ->references('ID')
            ->on('tipo_respuestas');

            $table->foreign('Procedencia')
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
