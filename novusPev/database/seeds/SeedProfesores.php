<?php

use Illuminate\Database\Seeder;

class SeedProfesores extends Seeder{
	public function run(){
		DB::table('Profesores')->insert([
			'nomina' => "L01292101",
			'nombre' => "Claudio",
			'apellido' => "Formicola",
			'idPaisOrigen' => 4,
			'idPaisResidencia' => 4,
			'link' => "it.linkedin.com/in/claudioformicola",
			'emailItesm' => "CFORMICOLA@itesm.mx",
			'emailPersonal' => "info@claudioformicola.com",
			'foto' => "public/CF.jpg",
			'experiencia' => "Tecnológico de Monterrey| C Laguna| Depto. Arquitectura| Profesor| Fernando Ramos Martin| 16/07/2014| 31/07/2014",
			'idDirector' => 1,
			'campus' => 15,
		]);

		DB::table('Profesores')->insert([
			'nomina' => "L0123101",
			'nombre' => "Dominique Marie Yvonne Louise",
			'apellido' => "Maze",
			'idPaisOrigen' => 5,
			'idPaisResidencia' => 5,
			'link' => "Desconocido",
			'emailItesm' => "DMAZE@itesm.mx",
			'emailPersonal' => "Desconocido",
			'foto' => "public/DMYL.jpg",
			'experiencia' => "NI3039| Gestión de negocios internacionales| 13443| Tec de Monterrey Campus Puebla| 100| 11/01/2016| 20/05/2016| Grado de maestría en el área",
			'idDirector' => 2,
			'campus' => 17,
		]);

		DB::table('Profesores')->insert([
			'nomina' => "L02241112",
			'nombre' => "Douglas John",
			'apellido' => "Young",
			'idPaisOrigen' => 2,
			'idPaisResidencia' => 2,
			'link' => "www.montana.edu/djyoung/",
			'emailItesm' => "douglas.young@itesm.mx",
			'emailPersonal' => "Desconocido",
			'foto' => "public/DJY.jpg",
			'experiencia' => "Tecnológico de Monterrey| Campus San Luis Potosi| Negocios| Profesor Extranjero Visitante| Mario Cortés Garay| 01/08/2015| 24/07/2016| Tiempo completo",
			'idDirector' => 3,
			'campus' => 17,
		]);
	}
}
