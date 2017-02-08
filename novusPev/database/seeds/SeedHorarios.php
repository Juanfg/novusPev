<?php

use Illuminate\Database\Seeder;

class SeedHorarios extends Seeder{
	public function run(){
		DB::table('Horarios')->insert([
			'idProfesor' => 1,
			'diaDeSemana' => "Miércoles",
			'horaInicio' => "23:59:59",
			'horaFin' => "23:59:59",
		]);

		DB::table('Horarios')->insert([
			'idProfesor' => 2,
			'diaDeSemana' => "Martes",
			'horaInicio' => "23:59:59",
			'horaFin' => "23:59:59",
		]);

		DB::table('Horarios')->insert([
			'idProfesor' => 3,
			'diaDeSemana' => "Jueves",
			'horaInicio' => "23:59:59",
			'horaFin' => "23:59:59",
		]);

		DB::table('Horarios')->insert([
			'idProfesor' => 1,
			'diaDeSemana' => "Viernes",
			'horaInicio' => "23:59:59",
			'horaFin' => "23:59:59",
		]);

		DB::table('Horarios')->insert([
			'idProfesor' => 3,
			'diaDeSemana' => "Sábado",
			'horaInicio' => "23:59:59",
			'horaFin' => "23:59:59",
		]);
	}
}