<?php

use Illuminate\Database\Seeder;

class SeedPeriodos extends Seeder{

	public function run(){
		DB::table('Periodos')->insert([
			'nombre' => 'Enero-Mayo',
			'activo' => true,
		]);
		DB::table('Periodos')->insert([
			'nombre' => 'Junio-Julio',
			'activo' => true,
		]);
		DB::table('Periodos')->insert([
			'nombre' => 'Agosto-Diciembre',
			'activo' => true,
		]);
	}
}
