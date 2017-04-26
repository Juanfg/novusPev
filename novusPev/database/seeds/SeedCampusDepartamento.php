<?php

use Illuminate\Database\Seeder;

class SeedCampusDepartamento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campus_departamento')->insert([
			'campus_id' => 1,
			'departamento_id' => 1,
		]);

		DB::table('campus_departamento')->insert([
			'campus_id' => 2,
			'departamento_id' => 2,
		]);

		DB::table('campus_departamento')->insert([
			'campus_id' => 3,
			'departamento_id' => 3,
		]);
    }
}
