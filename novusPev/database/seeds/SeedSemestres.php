<?php

use Illuminate\Database\Seeder;

class SeedSemestres extends Seeder{
	public function run(){
		DB::table('Semestres')->insert([
			'id' => 1,
			'idPeriodo' => 1,
			'anio' => 2014,
		]);
		DB::table('Semestres')->insert([
			'id' => 2,
			'idPeriodo' => 2,
			'anio' => 2014,
		]);
		DB::table('Semestres')->insert([
			'id' => 3,
			'idPeriodo' => 3,
			'anio' => 2014,
		]);
		DB::table('Semestres')->insert([
			'id' => 4,
			'idPeriodo' => 1,
			'anio' => 2015,
		]);
		DB::table('Semestres')->insert([
			'id' => 5,
			'idPeriodo' => 2,
			'anio' => 2015,
		]);
		DB::table('Semestres')->insert([
			'id' => 6,
			'idPeriodo' => 3,
			'anio' => 2015,
		]);
		DB::table('Semestres')->insert([
			'id' => 7,
			'idPeriodo' => 1,
			'anio' => 2016,
		]);
		DB::table('Semestres')->insert([
			'id' => 8,
			'idPeriodo' => 2,
			'anio' => 2016,
		]);
		DB::table('Semestres')->insert([
			'id' => 9,
			'idPeriodo' => 3,
			'anio' => 2016,
		]);

	}
}





$table->increments('id');
$table->integer('idPeriodo')->unsigned();
$table->foreign('idPeriodo')->references('id')->on('Periodos')->onDelete('cascade');
$table->string('anio');
$table->timestamps();
