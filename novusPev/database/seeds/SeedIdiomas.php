<?php

use Illuminate\Database\Seeder;

class SeedIdiomas extends Seeder{
	public function run(){
		DB::table('Idiomas')->insert([
			'nombre' => "Espanol",			
			'activo' => true,
		]);
		DB::table('Idiomas')->insert([
			'nombre' => "Ingles",			
			'activo' => true,
		]);
		DB::table('Idiomas')->insert([
			'nombre' => "Frances",			
			'activo' => true,
		]);
		DB::table('Idiomas')->insert([
			'nombre' => "Italiano",			
			'activo' => true,
		]);
		DB::table('Idiomas')->insert([
			'nombre' => "Aleman",			
			'activo' => true,
		]);
		DB::table('Idiomas')->insert([
			'nombre' => "Japones",
			'activo' => true,			
		]);
		DB::table('Idiomas')->insert([
			'nombre' => "Ruso",
			'activo' => true,			
		]);
		DB::table('Idiomas')->insert([
			'nombre' => "Chino",
			'activo' => true,			
		]);
	}
}