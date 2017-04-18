<?php

use Illuminate\Database\Seeder;

class SeedProfesoresIdioma extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('idioma_profesor')->insert([
			'idioma_id' => 5,
			'profesor_id' => 1,
		]);

		DB::table('idioma_profesor')->insert([
			'idioma_id' => 4,
			'profesor_id' => 1,
		]);

		DB::table('idioma_profesor')->insert([
			'idioma_id' => 3,
			'profesor_id' => 2,
		]);

		DB::table('idioma_profesor')->insert([
			'idioma_id' => 2,
			'profesor_id' => 3,
		]);
    }
}
