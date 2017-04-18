<?php

use Illuminate\Database\Seeder;

class SeedMaterias extends Seeder{
	public function run(){
		DB::table('materias')->insert([
			'clave' => '',
			'nombre' => "Derecho Romano",
			'departamento_id' => 4,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => '',
			'nombre' => "Matematicas 1",
			'departamento_id' => 5,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => '',
			'nombre' => "Administracion de Obras",
			'departamento_id' => 1,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => '',
			'nombre' => "Musica y Sociedad",
			'departamento_id' => 6,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => '',
			'nombre' => "Expresion Verbal en el Ambito Profesional",
			'departamento_id' => 6,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => '',
			'nombre' => "Interconexion de Redes",
			'departamento_id' => 5,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => '',
			'nombre' => "Algebra Lineal",
			'departamento_id' => 5,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => '',
			'nombre' => "Graficas Computacionales",
			'departamento_id' => 5,
			'activo' => true,
		]);

	}
}