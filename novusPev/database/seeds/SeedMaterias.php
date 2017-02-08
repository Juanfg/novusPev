<?php

use Illuminate\Database\Seeder;

class SeedMaterias extends Seeder{
	public function run(){
		DB::table('Materias')->insert([
			'materia' => "Derecho Romano",
			'idDepartamento' => 4,
		]);
		DB::table('Materias')->insert([
			'materia' => "Matematicas 1",
			'idDepartamento' => 5,
		]);
		DB::table('Materias')->insert([
			'materia' => "Administracion de Obras",
			'idDepartamento' => 1,
		]);
		DB::table('Materias')->insert([
			'materia' => "Musica y Sociedad",
			'idDepartamento' => 6,
		]);
		DB::table('Materias')->insert([
			'materia' => "Expresion Verbal en el Ambito Profesional",
			'idDepartamento' => 6,
		]);
		DB::table('Materias')->insert([
			'materia' => "Interconexion de Redes",
			'idDepartamento' => 5,
		]);
		DB::table('Materias')->insert([
			'materia' => "Algebra Lineal",
			'idDepartamento' => 5,
		]);
		DB::table('Materias')->insert([
			'materia' => "Graficas Computacionales",
			'idDepartamento' => 5,
		]);

	}
}