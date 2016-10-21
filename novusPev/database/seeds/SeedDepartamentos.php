<?php

use Illuminate\Database\Seeder;

class SeedDepartamentos extends Seeder{
	public function run(){
		DB::table('Departamentos')->insert([
			//'id' => 1,
			'departamento' => "Matemáticas y Ciencias Exactas",
			'idCampus' => 1,
				

		]);

		DB::table('Departamentos')->insert([
			//'id' => 2,
			'departamento' => "Arquitectura",
			'idCampus' => 2,		

		]);

		DB::table('Departamentos')->insert([
			//'id' => 3,
			'departamento' => "Humanidades",
			'idCampus' => 1,		

		]);

		DB::table('Departamentos')->insert([
			//'id' => 4,
			'departamento' => "Derecho",
			'idCampus' => 2,		

		]);

		DB::table('Departamentos')->insert([
			//'id' => 5,
			'departamento' => "Tecnologías de la Información",
			'idCampus' => 3,		

		]);

		DB::table('Departamentos')->insert([
			//'id' => 6,
			'departamento' => "Desarrollo Humano",
			'idCampus' => 3,		

		]);
	}
}

