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
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(SeedUsuarios::class);
        $this->call(SeedPaises::class);
        $this->call(SeedCampus::class);
        $this->call(SeedAreasInteres::class);
        $this->call(SeedIdiomas::class);
        $this->call(SeedDepartamentos::class);
        $this->call(SeedMaterias::class);
        $this->call(SeedPeriodos::class);
        $this->call(SeedSemestres::class);
        $this->call(SeedDirectores::class);
        $this->call(SeedProfesores::class);
        $this->call(SeedEvaluaciones::class);
        $this->call(SeedHorarios::class);
        //$this->call(SeedDirectoresDepartamento::class);
        //$this->call(SeedProfesoresDepartamento::class);
        //$this->call(SeedProfesoresIdioma::class);
        $this->call(SeedProfesoresAreaInteres::class);
    }
}
