<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DirectoresDepartamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DirectoresDepartamento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDepartamento')->unsigned();
            $table->foreign('idDepartamento')->references('id')->on('Departamentos')->onDelete('cascade');
            $table->integer('idDirector')->references('id')->on('Directores')->onDelete('cascade');
            $table->string('telefonoOficina');
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
        Schema::dropIfExists('DirectoresDepartamento');
    }
}
