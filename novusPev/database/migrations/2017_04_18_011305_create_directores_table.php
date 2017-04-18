<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomina',10);
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('campus_id')->unsigned();
            $table->foreign('campus_id')->references('id')->on('campus')->onDelete('cascade');
            $table->string('email_itesm');
            $table->string('email_personal');
            $table->string('foto');
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
        Schema::dropIfExists('directores');
    }
}
