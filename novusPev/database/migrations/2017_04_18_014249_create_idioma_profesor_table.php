<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomaProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idioma_profesor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idioma_id')->unsigned();
            $table->foreign('idioma_id')->references('id')->on('idiomas')->onDelete('cascade');
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
        Schema::drop('idioma_profesor');
    }
}
