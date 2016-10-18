<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Semestres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Semestres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPeriodo')->unsigned();
            $table->foreign('idPeriodo')->references('id')->on('Periodos')->onDelete('cascade');
            $table->string('anio');
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
        Schema::dropIfExists('Semestres');
    }
}
