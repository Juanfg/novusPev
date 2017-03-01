<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'name' => 'admin',
            'email' => 'admin@novus.com',
            'password' => bcrypt('secret'),
        ]);

        $user = User::where('email', 'admin@novus.com')->first();
        $user->assignRole('administrador');
    }
}
