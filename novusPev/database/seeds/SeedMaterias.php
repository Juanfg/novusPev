<?php

use Illuminate\Database\Seeder;

class SeedMaterias extends Seeder{
	public function run(){
		DB::table('Materias')->insert([
			'id' => 1,
			'materia' => "Derecho Romano",
		]);
		DB::table('Materias')->insert([
			'id' => 2,
			'materia' => "Matematicas 1",
		]);
		DB::table('Materias')->insert([
			'id' => 3,
			'materia' => "Administracion de Obras",
		]);
		DB::table('Materias')->insert([
			'id' => 4,
			'materia' => "Musica y Sociedad",
		]);
		DB::table('Materias')->insert([
			'id' => 5,
			'materia' => "Expresion Verbal en el Ambito Profesional",
		]);
		DB::table('Materias')->insert([
			'id' => 6,
			'materia' => "Interconexion de Redes",
		]);
		DB::table('Materias')->insert([
			'id' => 7,
			'materia' => "Algebra Lineal",
		]);
		DB::table('Materias')->insert([
			'id' => 8,
			'materia' => "Graficas Computacionales",
		]);

	}
}