<?php

use Illuminate\Database\Seeder;

class SeedCampus extends Seeder{
	public function run(){
		DB::table('Campus')->insert([
			'nombre' => "Puebla",
		]);

		DB::table('Campus')->insert([
			'nombre' => "Monterrey",
		]);

		DB::table('Campus')->insert([
			'nombre' => "CCV",
		]);
	}
}

