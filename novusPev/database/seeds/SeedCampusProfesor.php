<?php

use Illuminate\Database\Seeder;

class SeedCampusProfesor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campus_profesor')->insert([
			'campus_id' => 1,
			'profesor_id' => 1,
            'semestre_id' => 3,
		]);

		DB::table('campus_profesor')->insert([
			'campus_id' => 2,
			'profesor_id' => 2,
            'semestre_id' => 3,
		]);

		DB::table('campus_profesor')->insert([
			'campus_id' => 3,
			'profesor_id' => 3,
            'semestre_id' => 3,
		]);
    }
}
