<?php

use Illuminate\Database\Seeder;

class SeedEvaluaciones extends Seeder{
	public function run(){
		DB::table('Evaluaciones')->insert([
			'idProfesor' => 1,
			'idMateria' => 2,
			'grupo' => 1,
			'idSemestre' => 3,
			'idIdioma' => 2,
			'calificacionPromedio' => 89.5,
		]);

		DB::table('Evaluaciones')->insert([
			'idProfesor' => 2,
			'idMateria' => 3,
			'grupo' => 3,
			'idSemestre' => 1,
			'idIdioma' => 5,
			'calificacionPromedio' => 98.2,
		]);
	}
}
