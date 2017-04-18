<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentoDirectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamento_director', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');
            $table->integer('director_id')->unsigned();
            $table->foreign('director_id')->references('id')->on('directores')->onDelete('cascade');
            $table->integer('semestre_id')->unsigned();
            $table->foreign('semestre_id')->references('id')->on('semestres')->onDelete('cascade');
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
        Schema::drop('departamento_director');
    }
}
