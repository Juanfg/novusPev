<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Materias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('materia');
            $table->integer('idDepartamento')->unsigned();
            $table->foreign('idDepartamento')->references('id')->on('Departamentos')->onDelete('cascade');
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
        Schema::dropIfExists('Materias');
    }
}
