<?php

use Illuminate\Database\Seeder;

class SeedPaises extends Seeder{
	public function run(){
		DB::table('Paises')->insert([
			'nombre' => "Mexico",
			'activo' => true,	
		]);

		DB::table('Paises')->insert([
			'nombre' => "USA",
			'activo' => true,	
		]);

		DB::table('Paises')->insert([
			'nombre' => "Canada",
			'activo' => true,	
		]);

		DB::table('Paises')->insert([
			'nombre' => "Italia",
			'activo' => true,	
		]);

		DB::table('Paises')->insert([
			'nombre' => "Francia",
			'activo' => true,
		]);

		DB::table('Paises')->insert([
			'nombre' => "Alemania",
			'activo' => true,	
		]);

		DB::table('Paises')->insert([
			'nombre' => "Inglaterra",
			'activo' => true,	
		]);

		DB::table('Paises')->insert([
			'nombre' => "Japon"	,
			'activo' => true,
		]);

		DB::table('Paises')->insert([
			'nombre' => "Rusia",
			'activo' => true,
		]);

		DB::table('Paises')->insert([
			'nombre' => "China",
			'activo' => true,
		]);
	}
}