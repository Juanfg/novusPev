<?php

use Illuminate\Database\Seeder;

class SeedPaises extends Seeder{
	public function run(){
		DB::table('Paises')->insert([
			'nombre' => "Mexico"		
		]);

		DB::table('Paises')->insert([
			'nombre' => "USA"		
		]);

		DB::table('Paises')->insert([
			'nombre' => "Canada"		
		]);

		DB::table('Paises')->insert([
			'nombre' => "Italia"		
		]);

		DB::table('Paises')->insert([
			'nombre' => "Francia"		
		]);

		DB::table('Paises')->insert([
			'nombre' => "Alemania"		
		]);

		DB::table('Paises')->insert([
			'nombre' => "Inglaterra"		
		]);

		DB::table('Paises')->insert([
			'nombre' => "Japon"		
		]);

		DB::table('Paises')->insert([
			'nombre' => "Rusia"		
		]);

		DB::table('Paises')->insert([
			'nombre' => "China"		
		]);


	}
}