<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfesoresIdioma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProfesoresIdioma', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProfesor')->unsigned();
            $table->foreign('idProfesor')->references('id')->on('Profesores')->onDelete('cascade');
            $table->integer('idIdioma')->unsigned();
            $table->foreign('idIdioma')->references('id')->on('Idiomas')->onDelete('cascade');
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
        Schema::dropIfExists('ProfesoresIdioma');
    }
}
