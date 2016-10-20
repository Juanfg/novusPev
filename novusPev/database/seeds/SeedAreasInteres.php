<?php

use Illuminate\Database\Seeder;

class SeedAreasInteres extends Seeder{
	public function run(){
		DB::table('AreasInteres')->insert([
			'id' => 1,
			'AreaDeInteres' => "Redes y Telecomunicaciones",

		]);
		DB::table('AreasInteres')->insert([
			'id' => 2,
			'AreaDeInteres' => "Arquitectura",

		]);
		DB::table('AreasInteres')->insert([
			'id' => 3,
			'AreaDeInteres' => "Ciencias Computacionales",

		]);
		DB::table('AreasInteres')->insert([
			'id' => 4,
			'AreaDeInteres' => "Derecho",

		]);
	}
}



