<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idioma_id')->unsigned();
            $table->foreign('idioma_id')->references('id')->on('idiomas')->onDelete('cascade');
            $table->integer('profesor_id')->unsigned();
            $table->foreign('profesor_id')->references('id')->on('profesores')->onDelete('cascade');
            $table->integer('materia_id')->unsigned();
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
            $table->integer('semestre_id')->unsigned();
            $table->foreign('semestre_id')->references('id')->on('semestres')->onDelete('cascade');
            $table->integer('grupo');
            $table->double('calificacion', 5, 2);
            $table->boolean('activo');
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
        Schema::drop('evaluaciones');
    }
}
