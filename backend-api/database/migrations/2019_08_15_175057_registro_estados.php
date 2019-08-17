<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistroEstados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('registroestados');

        Schema::create('registroestados', function (Blueprint $table) {
            //$table->increments('idRegistroEstado');

            $table->integer('idregistroestado')-> unique();

            $table->string('cui', 20);
            $table->foreign('cui')
            ->references('CUI')
            ->on('pacientes');
            
            $table->date('fecha');
            $table->integer('estadoinicial');

            $table->foreign('estadoinicial')
            ->references('ID')
            ->on('estados');

            $table->integer('estadofinal');
            $table->foreign('estadofinal')
            ->references('ID')
            ->on('estados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registroestados');
    }
}
