<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Departamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Departamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departamento');
            $table->integer('idCampus')->unsigned();
            $table->foreign('idCampus')->references('id')->on('Campus')->onDelete('cascade');
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
        Schema::dropIfExists('Departamentos');
    }
}
