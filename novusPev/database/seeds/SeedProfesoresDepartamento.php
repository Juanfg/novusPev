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
		]);

		DB::table('departamento_profesor')->insert([
			'departamento_id' => 2,
			'profesor_id' => 2,
		]);

		DB::table('departamento_profesor')->insert([
			'departamento_id' => 3,
			'profesor_id' => 3,
		]);
    }
}
