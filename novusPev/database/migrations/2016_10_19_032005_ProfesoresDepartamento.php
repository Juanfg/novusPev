<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfesoresDepartamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProfesoresDepartamento', function (Blueprint $table) {
            $table->integer('idProfe')->unsigned();
            $table->foreign('idProfe')->references('id')->on('Profesores')->onDelete('cascade');
            $table->integer('idDepartamento')->unsigned();
            $table->foreign('idDepartamento')->references('id')->on('Departamentos')->onDelete('cascade');
            $table->integer('idSemestre')->unsigned();
            $table->foreign('idSemestre')->references('id')->on('Semestres')->onDelete('cascade');
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
        Schema::dropIfExists('ProfesoresDepartamento');
    }
}
