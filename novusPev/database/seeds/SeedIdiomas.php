<?php

use Illuminate\Database\Seeder;

class SeedIdiomas extends Seeder{
	public function run(){
		DB::table('Idioma')->insert([
			'id' => 1,
			'idioma' => "Espanol",			

		]);
		DB::table('Idioma')->insert([
			'id' => 2,
			'idioma' => "Ingles",			

		]);
		DB::table('Idioma')->insert([
			'id' => 3,
			'idioma' => "Frances",			

		]);
		DB::table('Idioma')->insert([
			'id' => 4,
			'idioma' => "Italiano",			

		]);
		DB::table('Idioma')->insert([
			'id' => 5,
			'idioma' => "Aleman",			

		]);
		DB::table('Idioma')->insert([
			'id' => 6,
			'idioma' => "Japones",			
		]);
		DB::table('Idioma')->insert([
			'id' => 7,
			'idioma' => "Ruso",			
		]);
		DB::table('Idioma')->insert([
			'id' => 8,
			'idioma' => "Chino",			
		]);
	}
}