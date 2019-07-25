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
            $table->float('peso');
            $table->float('talla');
            $table->float('pa');

            $table->string('historia', 200);
            $table->string('sindrome_clinico', 200);
            $table->string('psicosocial', 200);
            $table->string('nutricion', 200);
            $table->string('plan_medico', 200);
            $table->string('plan_psicosocial', 200);
            $table->string('plan_nutricional', 200);
            $table->string('plan_farmacologico', 200);
            $table->json('id_imagenes_lab')->nullable();
            $table->json('laboratorio')->nullable();
            $table->json('resultados_laboratorio')->nullable();
            $table->json('medicamento')->nullable();
            $table->json('proxima_visita')->nullable();
            $table->timestamps();
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
