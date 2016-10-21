<?php

use Illuminate\Database\Seeder;

class SeedDirectores extends Seeder{
	public function run(){
		DB::table('Directores')->insert([
			//'id' => 1,
			'nombre' => "Francisco Julián",
			'apellido' => "Huerta y Munive",
			'emailItesm' => "L01323513@itesm.mx",
			'emailPersonal' => "franciscohuerta@mailinator.com",
			'foto' => "pp1.png",
			'campus' => null,		

		]);

		DB::table('Directores')->insert([
			//'id' => 2,
			'nombre' => "Eduardo",
			'apellido' => "Luna Gutierrez",
			'emailItesm' => "L01322970@itesm.mx",
			'emailPersonal' => "eduardoLuna@mailinator.com",
			'foto' => "pp2.png",
			'campus' => null,		

		]);

		DB::table('Directores')->insert([
			//'id' => 3,
			'nombre' => "Alejandro",
			'apellido' => "Tovar Muñoz de Cote",
			'emailItesm' => "L01328484@itesm.mx",
			'emailPersonal' => "atmdc@mailinator.com",
			'foto' => "pp3.png",
			'campus' => null,		

		]);
	}
}


