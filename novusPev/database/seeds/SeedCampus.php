<?php

use Illuminate\Database\Seeder;

class SeedCampus extends Seeder{
	public function run(){
		DB::table('Campus')->insert([
			'id' => 1,
			'nombre' => "Puebla",

		]);

		DB::table('Campus')->insert([
			'id' => 2,
			'nombre' => "Monterrey",

		]);

		DB::table('Campus')->insert([
			'id' => 3,
			'nombre' => "CCV",

		]);
	}
}

