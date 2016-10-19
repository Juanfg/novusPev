<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfesoresAreaInteres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProfesoresAreaInteres', function (Blueprint $table) {
            $table->integer('idAreaInteres')->unsigned();
            $table->foreign('idAreaInteres')->references('id')->on('AreasInteres')->onDelete('cascade');
            $table->integer('idProfesor')->unsigned();
            $table->foreign('idProfesor')->references('id')->on('Profesores')->onDelete('cascade');
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
        Schema::dropIfExists('ProfesoresAreaInteres');
    }
}
