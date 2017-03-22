<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Profesores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomina');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('idPaisOrigen')->unsigned();
            $table->foreign('idPaisOrigen')->references('id')->on('Paises')->onDelete('cascade');
            $table->integer('idPaisResidencia')->unsigned();
            $table->foreign('idPaisResidencia')->references('id')->on('Paises')->onDelete('cascade');
            $table->string('link');
            $table->string('emailItesm');
            $table->string('emailPersonal');
            $table->string('foto');
            $table->string('experiencia');
            $table->integer('idDirector')->unsigned();
            $table->foreign('idDirector')->references('id')->on('Directores')->onDelete('cascade');
            $table->integer('campus')->unsigned();
            $table->foreign('campus')->references('id')->on('Campus')->onDelete('cascade');
            $table->integer('user')->unsigned()->nullable();
            $table->foreign('user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('Profesores');
    }
}
