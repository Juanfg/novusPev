<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Directores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Directores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomina');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('id_departamento')->unsigned();
            $table->foreign('id_departamento')->references('id')->on('Departamentos')->onDelete('cascade');
            $table->string('emailItesm');
            $table->string('emailPersonal');
            $table->string('foto');
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
        Schema::dropIfExists('Directores');
    }
}
