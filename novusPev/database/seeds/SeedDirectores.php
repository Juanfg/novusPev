<?php

use Illuminate\Database\Seeder;

class SeedDirectores extends Seeder{
	public function run(){
		DB::table('directores')->insert([
			'nomina' => "L01323513",
			'nombre' => "Gerardo",
			'apellido' => "Muñiz Rivera",
			'campus_id' => 15,
			'email_itesm' => "gerardo_muniz@itesm.mx",
			'email_personal' => "Desconocido",
			'foto' => "public/GMR.jpg",
			'activo' => true,
		]);

		DB::table('directores')->insert([
			'nomina' => "L0123456",
			'nombre' => "Ramón Eulogio",
			'apellido' => "Arroyo Gámez",
			'campus_id' => 15,
			'email_itesm' => "rarroyo@itesm.mx",
			'email_personal' => "Desconocido",
			'foto' => "public/noImgUser.png",	
			'activo' => true,
		]);

		DB::table('directores')->insert([
			'nomina' => "L01824812",
			'nombre' => "José Juan",
			'apellido' => "Anzures Gurria",
			'campus_id' => 17,
			'email_itesm' => "anzuresgurria@itesm.mx",
			'email_personal' => "Desconocido",
			'foto' => "public/JJAG.jpg",
			'activo' => true,
		]);
	}
}


