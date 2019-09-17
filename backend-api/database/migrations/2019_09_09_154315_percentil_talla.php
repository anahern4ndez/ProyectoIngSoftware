<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PercentilTalla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('percentil_tallas', function (Blueprint $table) {
            $table->float('year');
            $table->float('meses');
            $table->integer('sexo');
            $table->float('talla');
            $table->integer('percentil');
            $table->foreign('sexo')
            ->references('ID')
            ->on('sexo');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('percentil_tallas');
    }
}
