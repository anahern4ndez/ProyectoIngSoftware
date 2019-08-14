<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PesoPercentil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table->float('Edad');
        $table->int('Genero');
        $table->foreign('Genero')
        ->references('ID')
        ->on('sexos');
        $table->float('p1');
        $table->float('p2');
        $table->float('p3');
        $table->float('p4');
        $table->float('p5');
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
