<?php

use Illuminate\Database\Seeder;

class SeedPeriodos extends Seeder{
	public function run(){
		DB::table('Periodos')->insert([
			'id' => 1,
			'periodo' => 'Enero-Mayo',
		]);
		DB::table('Periodos')->insert([
			'id' => 2,
			'periodo' => 'Junio-Julio',
		]);
		DB::table('Periodos')->insert([
			'id' => 3,
			'periodo' => 'Agosto-Diciembre',
		]);
	}
}



//Enero-Mayo