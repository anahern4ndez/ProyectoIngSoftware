<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PercentilPesoAltura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('percentil_peso_alturas', function (Blueprint $table) {
            $table->float('altura');
            $table->integer('sexo');
            $table->float('peso');
            $table->string('percentil');
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
        Schema::dropIfExists('percentil_peso_alturas');
    }
}
