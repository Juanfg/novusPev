<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //Ordenar estas cosas
        //$this->call(SeedPaises::class);
        $this->call(SeedCampus::class);
        //$this->call(SeedAreasInteres::class);
        //$this->call(SeedHorarios::class);
        //$this->call(SeedIdiomas::class);
        //$this->call(SeedMaterias::class);
        $this->call(SeedDepartamentos::class);
        //$this->call(SeedPeriodos::class);
        //$this->call(SeedSemestres::class);
        //$this->call(SeedDirectores::class);
        //$this->call(SeedProfesores::class);
        //$this->call(SeedDirectoresDepartamento::class);
        //$this->call(SeedProfesoresDepartamento::class);
        //$this->call(SeedProfesoresIdioma::class);
        //$this->call(SeedEvaluaciones::class);
        //$this->call(SeedProfesoresAreaInteres::class);


    }
}



