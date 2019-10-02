<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormularioHemodialisis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_hemodialisis', function (Blueprint $table) {
            $table->string('nombre');
            $table->integer('edad');
            $table->string('sexo');
            $table->integer('no_de_registro');
            $table->date('fecha');
            $table->string('ultima_terapia');
            $table->date('fecha_cateter');
            $table->string('femoral');
            $table->string('subclavio');
            $table->string('yugular');
            $table->integer('no_sesiones');
            $table->integer('turno');
            $table->date('fecha_cultivo');
            $table->string('resultado_cultivo');
            $table->string('microorganizmo_aislado');
            $table->string('medico_reporta_evento');
            #$table->rememberToken();
            #$table->timestamps();
            #$table->string('api_token')->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
