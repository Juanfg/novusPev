<?php

use Illuminate\Database\Seeder;

class SeedDirectores extends Seeder{
	public function run(){
		DB::table('Directores')->insert([
			'nomina' => "L01323513",
			'nombre' => "Gerardo",
			'apellido' => "Muñiz Rivera",
			'emailItesm' => "gerardo_muniz@itesm.mx",
			'emailPersonal' => "Desconocido",
			'foto' => "public/GMR.jpg",
			'campus' => 15,
			'id_departamento' => 1,		

		]);

		DB::table('Directores')->insert([
			'nomina' => "L0123456",
			'nombre' => "Ramón Eulogio",
			'apellido' => "Arroyo Gámez",
			'emailItesm' => "rarroyo@itesm.mx",
			'emailPersonal' => "Desconocido",
			'foto' => "public/noImgUser.png",
			'campus' => 17,		
			'id_departamento' => 2,

		]);

		DB::table('Directores')->insert([
			'nomina' => "L01824812",
			'nombre' => "José Juan",
			'apellido' => "Anzures Gurria",
			'emailItesm' => "anzuresgurria@itesm.mx",
			'emailPersonal' => "Desconocido",
			'foto' => "public/JJAG.jpg",
			'campus' => 17,	
			'id_departamento' => 3,	

		]);
	}
}


