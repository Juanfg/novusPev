<?php

use Illuminate\Database\Seeder;

class SeedSemestres extends Seeder{
	public function run(){
		DB::table('Semestres')->insert([
			'periodo_id' => 1,
			'anio' => "2014",
			'activo' => true,
		]);
		DB::table('Semestres')->insert([
			'periodo_id' => 2,
			'anio' => "2014",
			'activo' => true,
		]);
		DB::table('Semestres')->insert([
			'periodo_id' => 3,
			'anio' => "2014",
			'activo' => true,
		]);
		DB::table('Semestres')->insert([
			'periodo_id' => 1,
			'anio' => "2015",
			'activo' => true,
		]);
		DB::table('Semestres')->insert([
			'periodo_id' => 2,
			'anio' => "2015",
			'activo' => true,
		]);
		DB::table('Semestres')->insert([
			'periodo_id' => 3,
			'anio' => "2015",
			'activo' => true,
		]);
		DB::table('Semestres')->insert([
			'periodo_id' => 1,
			'anio' => "2016",
			'activo' => true,
		]);
		DB::table('Semestres')->insert([
			'periodo_id' => 2,
			'anio' => "2016",
			'activo' => true,
		]);
		DB::table('Semestres')->insert([
			'periodo_id' => 3,
			'anio' => "2016",
			'activo' => true,
		]);

	}
}
