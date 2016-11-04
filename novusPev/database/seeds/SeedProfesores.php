<?php

use Illuminate\Database\Seeder;

class SeedProfesores extends Seeder{
	public function run(){
		DB::table('Profesores')->insert([
			'nombre' => "Jorge Alberto",
			'apellido' => "Beauregard Bravo",
			'idPaisOrigen' => 5,
			'idPaisResidencia' => 1,
			'link' => "www.barroco.org",
			'emailItesm' => "jbeauregard@itesm.mx",
			'emailPersonal' => "jorgeAlberto@loco.mx",
			'foto' => "img/Profesores/JABB",
			'experiencia' => "Diseno de paginas web",
			'idDirector' => 3,
			'campus' => 2,
		]);

		DB::table('Profesores')->insert([
			'nombre' => "Ricardo",
			'apellido' => "Rodiles Legaspi",
			'idPaisOrigen' => 9,
			'idPaisResidencia' => 1,
			'link' => "www.legabit.com",
			'emailItesm' => "rrodiles@itesm.mx",
			'emailPersonal' => "legabit@gmail.com",
			'foto' => "img/Profesores/RRL",
			'experiencia' => "BackEnd Developer",
			'idDirector' => 2,
			'campus' => 1,
		]);

		DB::table('Profesores')->insert([
			'nombre' => "Tabatha Tabeli",
			'apellido' => "Acosta Pastrana",
			'idPaisOrigen' => 3,
			'idPaisResidencia' => 1,
			'link' => "www.alces.org",
			'emailItesm' => "tacosta@itesm.mx",
			'emailPersonal' => "tabeli.acs@gmail.com",
			'foto' => "img/Profesores/TTAP",
			'experiencia' => "Freelancer",
			'idDirector' => 1,
			'campus' => 1,
		]);

		DB::table('Profesores')->insert([
			'nombre' => "Fernanda",
			'apellido' => "Montano Rios",
			'idPaisOrigen' => 9,
			'idPaisResidencia' => 1,
			'link' => "www.9gag.com",
			'emailItesm' => "fmontano@itesm.mx",
			'emailPersonal' => "alkiva@hotmail.mx",
			'foto' => "img/Profesores/FMR",
			'experiencia' => "Creacion de Contenido en 9gag",
			'idDirector' => 1,
			'campus' => 1,
		]);

		DB::table('Profesores')->insert([
			'nombre' => "Daniel",
			'apellido' => "Perez Rojas",
			'idPaisOrigen' => 6,
			'idPaisResidencia' => 1,
			'link' => "ing.pue.itesm.mx/danperez/",
			'emailItesm' => "danperez@itesm.mx",
			'emailPersonal' => "danperez@rojas.mx",
			'foto' => "img/Profesores/DPR",
			'experiencia' => "Maestro de catedra en ITESM Campus Puebla",
			'idDirector' => 2,
			'campus' => 3,
		]);
	}
}
