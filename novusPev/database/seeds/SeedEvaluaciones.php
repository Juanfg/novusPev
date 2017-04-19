<?php

use Illuminate\Database\Seeder;

class SeedEvaluaciones extends Seeder{
	public function run(){
		DB::table('Evaluaciones')->insert([
			'idioma_id' => 2,
			'profesor_id' => 1,
			'materia_id' => 2,
			'semestre_id' => 3,
			'grupo' => 1,
			'calificacion' => 89.5,
			'activo' => true,
		]);

		DB::table('Evaluaciones')->insert([
			'idioma_id' => 5,
			'profesor_id' => 2,
			'materia_id' => 3,
			'semestre_id' => 1,
			'grupo' => 3,
			'calificacion' => 98.2,
			'activo' => true,
		]);
	}
}
