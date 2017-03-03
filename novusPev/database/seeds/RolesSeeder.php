<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrador',
            'slug' => 'administrador',
            'description' => 'todos los privilegios'
        ]);

        DB::table('roles')->insert([
            'name' => 'Director',
            'slug' => 'director',
            'description' => 'privilegios completos'
        ]);

        DB::table('roles')->insert([
            'name' => 'Pev',
            'slug' => 'pev',
            'description' => 'privilegios de vista y modificacion de perfil'
        ]);

        DB::table('roles')->insert([
            'name' => 'usuario_normal',
            'slug' => 'usuario_normal',
            'description' => 'Ningun privilegio, solo vistas'
        ]);
    }
}
