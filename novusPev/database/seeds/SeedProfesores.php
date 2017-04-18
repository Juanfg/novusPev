<?php

use Illuminate\Database\Seeder;

class SeedProfesores extends Seeder{
	public function run(){
		DB::table('Profesores')->insert([
			'nomina' => "L01292101",
			'nombre' => "Claudio",
			'apellido' => "Formicola",
			'pais_origen_id' => 4,
			'pais_residencia_id' => 4,
			'email_itesm' => "CFORMICOLA@itesm.mx",
			'email_personal' => "info@claudioformicola.com",
			'foto' => "public/CF.jpg",
			'experiencia' => "Tecnológico de Monterrey| C Laguna| Depto. Arquitectura| Profesor| Fernando Ramos Martin| 16/07/2014| 31/07/2014",
			'zona_horaria' => 'Mexico',
			'activo' => true,
		]);

		DB::table('Profesores')->insert([
			'nomina' => "L0123101",
			'nombre' => "Dominique Marie Yvonne Louise",
			'apellido' => "Maze",
			'pais_origen_id' => 5,
			'pais_residencia_id' => 5,
			'email_itesm' => "DMAZE@itesm.mx",
			'email_personal' => "Desconocido",
			'foto' => "public/DMYL.jpg",
			'experiencia' => "NI3039| Gestión de negocios internacionales| 13443| Tec de Monterrey Campus Puebla| 100| 11/01/2016| 20/05/2016| Grado de maestría en el área",
			'zona_horaria' => 'Mexico',
			'activo' => true,
		]);

		DB::table('Profesores')->insert([
			'nomina' => "L02241112",
			'nombre' => "Douglas John",
			'apellido' => "Young",
			'pais_origen_id' => 2,
			'pais_residencia_id' => 2,
			'email_itesm' => "douglas.young@itesm.mx",
			'email_personal' => "Desconocido",
			'foto' => "public/DJY.jpg",
			'experiencia' => "Tecnológico de Monterrey| Campus San Luis Potosi| Negocios| Profesor Extranjero Visitante| Mario Cortés Garay| 01/08/2015| 24/07/2016| Tiempo completo",
			'zona_horaria' => 'Mexico',
			'activo' => true,
		]);
	}
}
