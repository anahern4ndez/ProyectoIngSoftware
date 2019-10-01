<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormularioMortalidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_mortalidad', function (Blueprint $table) {
            $table->string('nombre');
            $table->string('sexo');
            $table->integer('edad');
            $table->integer('no_de_registro');
            $table->date('fecha_de_deceso');
            $table->string('ultima_terapia');
            $table->string('sitio_deceso');
            $table->string('causa');
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
        Schema::dropIfExists('formulario_Mortalidad');
    }
}
