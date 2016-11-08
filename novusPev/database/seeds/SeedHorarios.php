<?php

use Illuminate\Database\Seeder;

class SeedHorarios extends Seeder{
	public function run(){
		DB::table('Horarios')->insert([
			'idProfesor' => 1,
			'diaDeSemana' => 3,
			'horaInicio' => "9999-12-31 23:59:59",
			'horaFin' => "9999-12-31 23:59:59",
		]);

		DB::table('Horarios')->insert([
			'idProfesor' => 2,
			'diaDeSemana' => 2,
			'horaInicio' => "9999-12-31 23:59:59",
			'horaFin' => "9999-12-31 23:59:59",
		]);

		DB::table('Horarios')->insert([
			'idProfesor' => 3,
			'diaDeSemana' => 4,
			'horaInicio' => "9999-12-31 23:59:59",
			'horaFin' => "9999-12-31 23:59:59",
		]);

		DB::table('Horarios')->insert([
			'idProfesor' => 4,
			'diaDeSemana' => 5,
			'horaInicio' => "9999-12-31 23:59:59",
			'horaFin' => "9999-12-31 23:59:59",
		]);

		DB::table('Horarios')->insert([
			'idProfesor' => 5,
			'diaDeSemana' => 6,
			'horaInicio' => "9999-12-31 23:59:59",
			'horaFin' => "9999-12-31 23:59:59",
		]);
	}
}