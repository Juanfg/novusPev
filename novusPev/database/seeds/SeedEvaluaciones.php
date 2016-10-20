<?php

use Illuminate\Database\Seeder;

class SeedEvaluaciones extends Seeder{
	public function run(){
		DB::table('Evaluaciones')->insert([

		]);
	}
}


/*

$table->increments('id');
$table->integer('idProfesor')->unsigned();
$table->foreign('idProfesor')->references('id')->on('Profesores')->onDelete('cascade');
$table->integer('idMateria')->unsigned();
$table->foreign('idMateria')->references('id')->on('Materias')->onDelete('cascade');
$table->integer('idSemestre')->unsigned();
$table->foreign('idSemestre')->references('id')->on('Semestres')->onDelete('cascade');
$table->integer('idIdioma')->unsigned();
$table->foreign('idIdioma')->references('id')->on('Idiomas')->onDelete('cascade');
$table->float('calificacionPromedio');
$table->timestamps();*/
