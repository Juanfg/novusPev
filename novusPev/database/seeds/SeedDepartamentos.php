<?php

use Illuminate\Database\Seeder;

class SeedDepartamentos extends Seeder{
	public function run(){

		DB::table('departamentos')->insert([
			'nombre' => "Diseño industrial",
			'activo' => true,		

		]);

		DB::table('departamentos')->insert([
			'nombre' => "Negocios Internacionales",
			'activo' => true,		

		]);

		DB::table('departamentos')->insert([
			'nombre' => "Derecho y Relaciones Internacionales",
			'activo' => true,		

		]);

		DB::table('departamentos')->insert([
			'nombre' => "Derecho",
			'activo' => true,		

		]);

		DB::table('departamentos')->insert([
			'nombre' => "Tecnologías de la Información",
			'activo' => true,		

		]);

		DB::table('departamentos')->insert([
			'nombre' => "Desarrollo Humano",
			'activo' => true,		

		]);
	}
}

