<?php

use Illuminate\Database\Seeder;

class SeedHorarios extends Seeder{
	public function run(){
		DB::table('horarios')->insert([
			'hora_inicio' => "10:00:00",
			'hora_fin' => "14:00:00",
			'dia_semana' => "Miercoles",
			'activo' => true,
		]);

		DB::table('horarios')->insert([
			'hora_inicio' => "13:00:00",
			'hora_fin' => "17:00:00",
			'dia_semana' => "Martes",
			'activo' => true,
		]);

		DB::table('horarios')->insert([
			'hora_inicio' => "16:00:00",
			'hora_fin' => "20:00:00",
			'dia_semana' => "Jueves",
			'activo' => true,
		]);

		DB::table('horarios')->insert([
			'hora_inicio' => "8:00:00",
			'hora_fin' => "12:00:00",
			'dia_semana' => "Viernes",
			'activo' => true,
		]);

		DB::table('horarios')->insert([
			'hora_inicio' => "13:00:00",
			'hora_fin' => "14:30:00",
			'dia_semana' => "Sabado",
			'activo' => true,
		]);
	}
}