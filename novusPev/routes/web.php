<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', 'HomeController@index')->name('/home');

    Route::get('/', function () {
        return view('/home');
    });

    Route::group([
            // 'prefix' => 'administrador', 
            'middleware' => ['auth', 'acl'],
            'is' => 'administrador',
            ], 
    function () {
        Route::resource('admin', 'AdminController');
    });

    Route::resource('profesores', 'ProfesorController');

    Route::resource('directores', 'DirectorController');

    Route::resource('campus', 'CampusController');

    Route::resource('paises', 'PaisController');


    Route::resource('areasInteres', 'AreaInteresController');

    Route::resource('profesoresAreasInteres', 'ProfesoresAreaDeInteresController');

    Route::resource('horarios', 'HorarioController');

    Route::resource('departamentos', 'DepartamentoController');
  
    Route::resource('idiomas', 'IdiomaController');

    Route::resource('materias', 'MateriaController');

    Route::resource('periodos', 'PeriodoController');

    Route::resource('semestres', 'SemestreController');


    Route::resource('evaluaciones', 'EvaluacionController');

    Route::resource('areasInteres', 'AreaInteresController');
 
    Route::resource('profesoresAreasInteres', 'ProfesoresAreaDeInteresController');
 
    Route::resource('horarios', 'HorarioController');

    Auth::routes();

    Route::get('logout', function(){
			Auth::logout();
			return redirect()->route('/home');
	})->name('logout');
});

Auth::routes();