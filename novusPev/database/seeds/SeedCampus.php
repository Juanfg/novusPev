<?php

use Illuminate\Database\Seeder;

class SeedCampus extends Seeder{
	public function run(){
		DB::table('Campus')->insert([
			'nombre' => "Aguascalientes",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Central de Veracruz",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Chiapas",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Chihuahua",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Ciudad de México",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Ciudad Juárez",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Ciudad Obregón",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Cuernavaca",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Cumbres",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Estado de México",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Eugenio Garza Sada",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Eugenio Garza Lagüera",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Guadalajara",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Hidalgo",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Irapuato",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Laguna",
		]);

		DB::table('Campus')->insert([
			'nombre' => "León",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Monterrey",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Morelia",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Puebla",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Querétaro",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Saltillo",
		]);

		DB::table('Campus')->insert([
			'nombre' => "San Luis Potosí",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Santa Catarina",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Santa Fe",
		]);
		DB::table('Campus')->insert([
			'nombre' => "Sinaloa",
		]);
		DB::table('Campus')->insert([
			'nombre' => "Sonora Norte",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Tampico",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Toluca",
		]);
		
		DB::table('Campus')->insert([
			'nombre' => "Valle Alto",
		]);
		
		DB::table('Campus')->insert([
			'nombre' => "Zacatecas",
		]);
	}
}

