<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Evaluaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Evaluaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProfesor')->unsigned();
            $table->foreign('idProfesor')->references('id')->on('Profesores')->onDelete('cascade');
            $table->integer('idMateria')->unsigned();
            $table->foreign('idMateria')->references('id')->on('Materias')->onDelete('cascade');
            $table->integer('grupo')->unsigned();
            $table->integer('idSemestre')->unsigned();
            $table->foreign('idSemestre')->references('id')->on('Semestres')->onDelete('cascade');
            $table->integer('idIdioma')->unsigned();
            $table->foreign('idIdioma')->references('id')->on('Idiomas')->onDelete('cascade');
            $table->float('calificacionPromedio');
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
        Schema::dropIfExists('Evaluaciones');
    }
}
