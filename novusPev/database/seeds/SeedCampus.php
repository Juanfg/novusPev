<?php

use Illuminate\Database\Seeder;

class SeedCampus extends Seeder{
	public function run(){
		DB::table('campus')->insert([
			'nombre' => "Aguascalientes",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Central de Veracruz",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Chiapas",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Chihuahua",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Ciudad de México",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Ciudad Juárez",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Ciudad Obregón",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Cuernavaca",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Cumbres",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Estado de México",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Eugenio Garza Sada",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Eugenio Garza Lagüera",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Guadalajara",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Hidalgo",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Irapuato",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Laguna",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "León",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Monterrey",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Morelia",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Puebla",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Querétaro",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Saltillo",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "San Luis Potosí",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Santa Catarina",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Santa Fe",
			'activo' => true,
		]);
		DB::table('campus')->insert([
			'nombre' => "Sinaloa",
			'activo' => true,
		]);
		DB::table('campus')->insert([
			'nombre' => "Sonora Norte",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Tampico",
			'activo' => true,
		]);

		DB::table('campus')->insert([
			'nombre' => "Toluca",
			'activo' => true,
		]);
		
		DB::table('campus')->insert([
			'nombre' => "Valle Alto",
			'activo' => true,
		]);
		
		DB::table('campus')->insert([
			'nombre' => "Zacatecas",
			'activo' => true,
		]);
	}
}

