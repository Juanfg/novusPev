<?php

use Illuminate\Database\Seeder;

class SeedSemestres extends Seeder{
	public function run(){
		DB::table('Semestres')->insert([
			'idPeriodo' => 1,
			'anio' => "2014",
		]);
		DB::table('Semestres')->insert([
			'idPeriodo' => 2,
			'anio' => "2014",
		]);
		DB::table('Semestres')->insert([
			'idPeriodo' => 3,
			'anio' => "2014",
		]);
		DB::table('Semestres')->insert([
			'idPeriodo' => 1,
			'anio' => "2015",
		]);
		DB::table('Semestres')->insert([
			'idPeriodo' => 2,
			'anio' => "2015",
		]);
		DB::table('Semestres')->insert([
			'idPeriodo' => 3,
			'anio' => "2015",
		]);
		DB::table('Semestres')->insert([
			'idPeriodo' => 1,
			'anio' => "2016",
		]);
		DB::table('Semestres')->insert([
			'idPeriodo' => 2,
			'anio' => "2016",
		]);
		DB::table('Semestres')->insert([
			'idPeriodo' => 3,
			'anio' => "2016",
		]);

	}
}
