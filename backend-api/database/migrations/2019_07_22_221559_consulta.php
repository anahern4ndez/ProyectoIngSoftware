<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Consulta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('consultas');

        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cui', 20);
            $table->foreign('cui')
            ->references('CUI')
            ->on('pacientes');
            
            $table->date('fecha');
            $table->float('peso')->nullable();
            $table->float('talla')->nullable();
            $table->float('pa')->nullable();

            $table->integer('sindrome_clinico')->nullable();
            $table->string('Dx_Definitivo', 200)->nullable();
            $table->string('Dx_Asociados', 200)->nullable();

            $table->string('historia', 200)->nullable();

            $table->json('medicamento')->nullable();
            $table->json('resultados_laboratorio')->nullable();
            $table->json('examen_fisico')->nullable();

            $table->string('evaluacion_medica', 200)->nullable();
            $table->string('plan_medico', 200)->nullable();

            $table->string('evaluacion_psicologica', 200)->nullable();
            $table->string('plan_psicologico', 200)->nullable();

            $table->string('evaluacion_trabajo_social', 200)->nullable();
            $table->string('plan_trabajo_social', 200)->nullable();

            $table->string('evaluacion_nutricional', 200)->nullable();
            $table->string('plan_nutricional', 200)->nullable();
            
            $table->string('evaluacion_farmacologica', 200)->nullable();
            $table->string('plan_farmacologico', 200)->nullable();

            // $table->json('id_imagenes_lab')->nullable();
            
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
