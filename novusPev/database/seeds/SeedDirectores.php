<?php

use Illuminate\Database\Seeder;

class SeedDirectores extends Seeder{
	public function run(){
		DB::table('Directores')->insert([
			'nombre' => "Gerardo",
			'apellido' => "Muñiz Rivera",
			'emailItesm' => "gerardo_muniz@itesm.mx",
			'emailPersonal' => "Desconocido",
			'foto' => "public/GMR.jpg",
			'campus' => 15,		

		]);

		DB::table('Directores')->insert([
			'nombre' => "Ramón Eulogio",
			'apellido' => "Arroyo Gámez",
			'emailItesm' => "rarroyo@itesm.mx",
			'emailPersonal' => "Desconocido",
			'foto' => "public/noImgUser.png",
			'campus' => 17,		

		]);

		DB::table('Directores')->insert([
			'nombre' => "José Juan",
			'apellido' => "Anzures Gurria",
			'emailItesm' => "anzuresgurria@itesm.mx",
			'emailPersonal' => "Desconocido",
			'foto' => "public/JJAG.jpg",
			'campus' => 17,		

		]);
	}
}


