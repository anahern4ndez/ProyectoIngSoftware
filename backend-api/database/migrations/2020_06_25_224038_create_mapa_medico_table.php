<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMapaMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('mapas');

        Schema::create('mapas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cui', 20);
            $table->foreign('cui')
                ->references('CUI')
                ->on('pacientes');
            
            $table->date('fecha');

            $table->float('na')->nullable();
            $table->float('k')->nullable();
            $table->float('cl')->nullable();
            $table->float('hco')->nullable();
            $table->float('bun')->nullable();
            $table->float('creatinina')->nullable();
            $table->float('glucosa')->nullable();
            $table->float('albumina')->nullable();
            $table->float('colesterol')->nullable();
            $table->float('calcio')->nullable();
            $table->float('fosforo')->nullable();
            $table->float('pth')->nullable();
            $table->float('globulosBlancos')->nullable();
            $table->float('hb')->nullable();
            $table->float('ht')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapas');
    }
}
