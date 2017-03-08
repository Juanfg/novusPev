<?php

use Illuminate\Database\Seeder;

class SeedUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Novus1',
            'email' => 'novus1@gmail.com',
            'password' => bcrypt('secret'),
            'timezone' => ' 	America/Mexico_City',
        ]);
    }
}
