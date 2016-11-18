<?php

use Illuminate\Database\Seeder;

class SeedDirectoresDepartamento extends Seeder{
	public function run(){
		DB::table('DirectoresDepartamento')->insert([
			'id' => 1,
			'idDepartamento' => 1,
			'idDirector' => 1,
			'telefonoOficina' => "222-123-1231",

		]);

		DB::table('DirectoresDepartamento')->insert([
			'id' => 2,
			'idDepartamento' => 2,
			'idDirector' => 2,
			'telefonoOficina' => "222-921-8242",

		]);

		DB::table('DirectoresDepartamento')->insert([
			'id' => 3,
			'idDepartamento' => 3,
			'idDirector' => 3,
			'telefonoOficina' => "222-553-2813",

		]);
	}
}

