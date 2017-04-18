<?php

use Illuminate\Database\Seeder;

class SeedDirectoresDepartamento extends Seeder{
	public function run(){
		DB::table('departamento_director')->insert([
			'departamento_id' => 1,
			'director_id' => 1,
			'semestre_id' => 3,

		]);

		DB::table('departamento_director')->insert([
			'departamento_id' => 2,
			'director_id' => 2,
			'semestre_id' => 3,

		]);

		DB::table('departamento_director')->insert([
			'departamento_id' => 3,
			'director_id' => 3,
			'semestre_id' => 3,

		]);
	}
}

