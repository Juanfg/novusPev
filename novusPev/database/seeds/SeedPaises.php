<?php

use Illuminate\Database\Seeder;

class SeedPaises extends Seeder{
	public function run(){
		DB::table('paises')->insert([
			'nombre' => "Mexico",
			'activo' => true,		
		]);

		DB::table('paises')->insert([
			'nombre' => "USA",
			'activo' => true,		
		]);

		DB::table('paises')->insert([
			'nombre' => "Canada",
			'activo' => true,		
		]);

		DB::table('paises')->insert([
			'nombre' => "Italia",
			'activo' => true,		
		]);

		DB::table('paises')->insert([
			'nombre' => "Francia",
			'activo' => true,		
		]);

		DB::table('paises')->insert([
			'nombre' => "Alemania",
			'activo' => true,		
		]);

		DB::table('paises')->insert([
			'nombre' => "Inglaterra",
			'activo' => true,		
		]);

		DB::table('paises')->insert([
			'nombre' => "Japon",
			'activo' => true,		
		]);

		DB::table('paises')->insert([
			'nombre' => "Rusia",
			'activo' => true,		
		]);

		DB::table('paises')->insert([
			'nombre' => "China",
			'activo' => true,		
		]);


	}
}