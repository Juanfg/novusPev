<?php

use Illuminate\Database\Seeder;

class SeedIdiomas extends Seeder{
	public function run(){
		DB::table('Idiomas')->insert([
			'idioma' => "Espanol",			

		]);
		DB::table('Idiomas')->insert([
			'idioma' => "Ingles",			

		]);
		DB::table('Idiomas')->insert([
			'idioma' => "Frances",			

		]);
		DB::table('Idiomas')->insert([
			'idioma' => "Italiano",			

		]);
		DB::table('Idiomas')->insert([
			'idioma' => "Aleman",			

		]);
		DB::table('Idiomas')->insert([
			'idioma' => "Japones",			
		]);
		DB::table('Idiomas')->insert([
			'idioma' => "Ruso",			
		]);
		DB::table('Idiomas')->insert([
			'idioma' => "Chino",			
		]);
	}
}