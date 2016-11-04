<?php

use Illuminate\Database\Seeder;

class SeedAreasInteres extends Seeder{
	public function run(){
		DB::table('AreasInteres')->insert([
			'AreaDeInteres' => "Redes y Telecomunicaciones",

		]);
		DB::table('AreasInteres')->insert([
			'AreaDeInteres' => "Arquitectura",

		]);
		DB::table('AreasInteres')->insert([
			'AreaDeInteres' => "Ciencias Computacionales",

		]);
		DB::table('AreasInteres')->insert([
			'AreaDeInteres' => "Derecho",

		]);
	}
}



