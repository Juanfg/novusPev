<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_profesor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('horario_id')->unsigned();
            $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('cascade');
            $table->integer('profesor_id')->unsigned();
            $table->foreign('profesor_id')->references('id')->on('profesores')->onDelete('cascade');
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
        Schema::drop('horario_profesor');
    }
}
