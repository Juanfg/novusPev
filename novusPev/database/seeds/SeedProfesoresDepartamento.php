<?php

use Illuminate\Database\Seeder;

class SeedProfesoresDepartamento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamento_profesor')->insert([
			'departamento_id' => 1,
			'profesor_id' => 1,
			'semestre_id' => 5,
		]);

		DB::table('departamento_profesor')->insert([
			'departamento_id' => 2,
			'profesor_id' => 2,
			'semestre_id' => 5,
		]);

		DB::table('departamento_profesor')->insert([
			'departamento_id' => 3,
			'profesor_id' => 3,
			'semestre_id' => 5,
		]);
    }
}
