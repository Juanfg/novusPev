<?php

use Illuminate\Database\Seeder;

class SeedProfesoresAreaInteres extends Seeder{
	public function run(){
		DB::table('ProfesoresAreaInteres')->insert([
			'idAreaInteres' => 1,
			'idProfesor' => 1,
		]);

		DB::table('ProfesoresAreaInteres')->insert([
			'idAreaInteres' => 3,
			'idProfesor' => 1,
		]);

		DB::table('ProfesoresAreaInteres')->insert([
			'idAreaInteres' => 2,
			'idProfesor' => 2,
		]);
		DB::table('ProfesoresAreaInteres')->insert([
			'idAreaInteres' => 4,
			'idProfesor' => 3,
		]);
	}
}