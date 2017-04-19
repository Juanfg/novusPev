<?php

use Illuminate\Database\Seeder;

class SeedProfesoresHorario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horario_profesor')->insert([
			'horario_id' => 1,
			'profesor_id' => 1,
		]);

        DB::table('horario_profesor')->insert([
			'horario_id' => 2,
			'profesor_id' => 1,
		]);

        DB::table('horario_profesor')->insert([
			'horario_id' => 3,
			'profesor_id' => 2,
		]);

        DB::table('horario_profesor')->insert([
			'horario_id' => 4,
			'profesor_id' => 3,
		]);
    }
}
