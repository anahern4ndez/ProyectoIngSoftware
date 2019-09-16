<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodigoLugarDeProcedenciaHemodialisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigo_lugar_de_procedencia_hemodialisis', function (Blueprint $table) {
            $table->integer('ID');
            $table->primary('ID');
            $table->string('significado',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codigo_lugar_de_procedencia_hemodialisis');
    }
}
