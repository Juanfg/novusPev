<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomina',10);
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email_itesm');
            $table->string('email_personal');
            $table->string('experiencia');
            $table->string('foto');
            $table->integer('pais_origen_id')->unsigned();
            $table->foreign('pais_origen_id')->references('id')->on('paises')->onDelete('cascade');
            $table->integer('pais_residencia_id')->unsigned();
            $table->foreign('pais_residencia_id')->references('id')->on('paises')->onDelete('cascade');
            $table->string('zona_horaria');
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
        Schema::dropIfExists('profesores');
    }
}
