<?php

use Illuminate\Database\Seeder;

class SeedDepartamentos extends Seeder{
	public function run(){

		DB::table('Departamentos')->insert([
			'departamento' => "Diseño industrial",
			'idCampus' => 15,		

		]);

		DB::table('Departamentos')->insert([
			'departamento' => "Negocios Internacionales",
			'idCampus' => 17,		

		]);

		DB::table('Departamentos')->insert([
			'departamento' => "Derecho y Relaciones Internacionales",
			'idCampus' => 17,		

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

