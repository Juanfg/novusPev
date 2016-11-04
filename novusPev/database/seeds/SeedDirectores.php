<?php

use Illuminate\Database\Seeder;

class SeedDirectores extends Seeder{
	public function run(){
		DB::table('Directores')->insert([
			'nombre' => "Francisco Julian",
			'apellido' => "Huerta y Munive",
			'emailItesm' => "L01323513@itesm.mx",
			'emailPersonal' => "franciscohuerta@mailinator.com",
			'foto' => "pp1.png",
			'campus' => 1,		

		]);

		DB::table('Directores')->insert([
			'nombre' => "Eduardo",
			'apellido' => "Luna Gutierrez",
			'emailItesm' => "L01322970@itesm.mx",
			'emailPersonal' => "eduardoLuna@mailinator.com",
			'foto' => "pp2.png",
			'campus' => 2,		

		]);

		DB::table('Directores')->insert([
			'nombre' => "Alejandro",
			'apellido' => "Tovar Muñoz de Cote",
			'emailItesm' => "L01328484@itesm.mx",
			'emailPersonal' => "atmdc@mailinator.com",
			'foto' => "pp3.png",
			'campus' => 3,		

		]);
	}
}


