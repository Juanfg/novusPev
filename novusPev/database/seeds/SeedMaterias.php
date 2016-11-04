<?php

use Illuminate\Database\Seeder;

class SeedMaterias extends Seeder{
	public function run(){
		DB::table('Materias')->insert([
			'materia' => "Derecho Romano",
		]);
		DB::table('Materias')->insert([
			'materia' => "Matematicas 1",
		]);
		DB::table('Materias')->insert([
			'materia' => "Administracion de Obras",
		]);
		DB::table('Materias')->insert([
			'materia' => "Musica y Sociedad",
		]);
		DB::table('Materias')->insert([
			'materia' => "Expresion Verbal en el Ambito Profesional",
		]);
		DB::table('Materias')->insert([
			'materia' => "Interconexion de Redes",
		]);
		DB::table('Materias')->insert([
			'materia' => "Algebra Lineal",
		]);
		DB::table('Materias')->insert([
			'materia' => "Graficas Computacionales",
		]);

	}
}