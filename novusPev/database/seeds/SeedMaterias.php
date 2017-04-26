<?php

use Illuminate\Database\Seeder;

class SeedMaterias extends Seeder{
	public function run(){
		DB::table('materias')->insert([
			'clave' => 'NA001',
			'nombre' => "Derecho Romano",
			'departamento_id' => 4,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => 'NA002',
			'nombre' => "Matematicas 1",
			'departamento_id' => 5,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => 'NA003',
			'nombre' => "Administracion de Obras",
			'departamento_id' => 1,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => 'NA004',
			'nombre' => "Musica y Sociedad",
			'departamento_id' => 6,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => 'NA005',
			'nombre' => "Expresion Verbal en el Ambito Profesional",
			'departamento_id' => 6,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => 'NA006',
			'nombre' => "Interconexion de Redes",
			'departamento_id' => 5,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => 'NA007',
			'nombre' => "Algebra Lineal",
			'departamento_id' => 5,
			'activo' => true,
		]);
		DB::table('materias')->insert([
			'clave' => 'NA008',
			'nombre' => "Graficas Computacionales",
			'departamento_id' => 5,
			'activo' => true,
		]);

	}
}