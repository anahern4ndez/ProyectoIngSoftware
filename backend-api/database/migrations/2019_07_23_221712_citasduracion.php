<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Citasduracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::table('citas', function (Blueprint $table) {
            $table->integer('duracionCita')->default(0);
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
