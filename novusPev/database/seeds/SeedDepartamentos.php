<?php

use Illuminate\Database\Seeder;

class SeedDepartamentos extends Seeder{
	public function run(){
		DB::table('Departamentos')->insert([
			'departamento' => "Matemáticas y Ciencias Exactas",
			'idCampus' => 1,
				

		]);

		DB::table('Departamentos')->insert([
			'departamento' => "Arquitectura",
			'idCampus' => 2,		

		]);

		DB::table('Departamentos')->insert([
			'departamento' => "Humanidades",
			'idCampus' => 1,		

		]);

		DB::table('Departamentos')->insert([
			'departamento' => "Derecho",
			'idCampus' => 2,		

		]);

		DB::table('Departamentos')->insert([
			'departamento' => "Tecnologías de la Información",
			'idCampus' => 3,		

		]);

		DB::table('Departamentos')->insert([
			'departamento' => "Desarrollo Humano",
			'idCampus' => 3,		

		]);
	}
}

