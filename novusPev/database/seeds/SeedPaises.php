<?php

use Illuminate\Database\Seeder;

class SeedPaises extends Seeder{
	public function run(){
		DB::table('Paises')->insert([
			'id' => 1,
			'nombre' => "Mexico"		
		]);

		DB::table('Paises')->insert([
			'id' => 2,
			'nombre' => "USA"		
		]);

		DB::table('Paises')->insert([
			'id' => 3,
			'nombre' => "Canada"		
		]);

		DB::table('Paises')->insert([
			'id' => 4,
			'nombre' => "Italia"		
		]);

		DB::table('Paises')->insert([
			'id' => 5,
			'nombre' => "Francia"		
		]);

		DB::table('Paises')->insert([
			'id' => 6,
			'nombre' => "Alemania"		
		]);

		DB::table('Paises')->insert([
			'id' => 7,
			'nombre' => "Inglaterra"		
		]);

		DB::table('Paises')->insert([
			'id' => 8,
			'nombre' => "Japon"		
		]);

		DB::table('Paises')->insert([
			'id' => 9,
			'nombre' => "Rusia"		
		]);

		DB::table('Paises')->insert([
			'id' => 10,
			'nombre' => "China"		
		]);


	}
}