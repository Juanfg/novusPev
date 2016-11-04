<?php

use Illuminate\Database\Seeder;

class SeedPeriodos extends Seeder{
	public function run(){
		DB::table('Periodos')->insert([
			'periodo' => 'Enero-Mayo',
		]);
		DB::table('Periodos')->insert([
			'periodo' => 'Junio-Julio',
		]);
		DB::table('Periodos')->insert([
			'periodo' => 'Agosto-Diciembre',
		]);
	}
}
