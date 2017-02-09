<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Evaluacion;
use App\Semestre;
use App\Profesor;
use App\Materia;
use App\Idioma;
use App\Periodo;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evaluaciones.index', ['evaluaciones' => Evaluacion::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesores = Profesor::select('nombre', 'apellido')->get();
        foreach ($profesores as $profesor){
            $nombres_profesores[] = $profesor->nombre . " " . $profesor->apellido;
        }

        $materias = Materia::select('materia')->get();
        foreach ($materias as $materia) {
            $nombres_materias[] = $materia->materia;
        }

        $semestres = Semestre::all();
        foreach ($semestres as $semestre){
            $nombres_semestres[] = Periodo::find($semestre->idPeriodo)->periodo . " " . $semestre->anio;
        }

        $idiomas = Idioma::select('idioma')->get();
        foreach ($idiomas as $idioma) {
            $nombres_idiomas[] = $idioma->idioma;
        }

        return  view('evaluaciones.create', ['profesores'=>$nombres_profesores, 'materias'=>$nombres_materias, 'semestres'=>$nombres_semestres, 'idiomas'=>$nombres_idiomas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "idProfesor" => "required|string",
            "idMateria" => "required|string",
            "grupo" => "required|string",
            "idSemestre" => "required|string",
            "idIdioma" => "required|string",
            "calificacionPromedio" => "required|string",
            ]);

        $profesores = Profesor::all();
        foreach ($profesores as $profesor){
            $nombres_profesores[] = $profesor->nombre;
        }

        $materias = Materia::all();
        foreach ($materias as $materia) {
            $nombres_materias[] = $materia->materia;
        }

        $semestres = Semestre::all();
        foreach ($semestres as $semestre){
            $periodos[] = $semestre->idPeriodo;
            $anios[] = $semestre->anio;
        }

        $idiomas = Idioma::all();
        foreach ($idiomas as $idioma) {
            $nombres_idiomas[] = $idioma->idioma;
        }

        $index = $request->idProfesor;

        $profesor = Profesor::where('nombre', $nombres_profesores[$index])->first()->id;

        $index = $request->idMateria;

        $materia = Materia::where('materia', $nombres_materias[$index])->first()->id;

        $index = $request->idSemestre;

        $semestre = Semestre::where([ ['idPeriodo', $periodos[$index]], ['anio', $anios[$index]] ])->first()->id;

        $index = $request->idIdioma;

        $idioma = Idioma::where('idioma', $nombres_idiomas[$index])->first()->id;

        $alreadyExists = Evaluacion::where([  ['idProfesor', $profesor], ['idMateria', $materia], ['idSemestre', $semestre] ])->count();

        if($alreadyExists == 0){
            //no existe
            Evaluacion::create([
                "idProfesor"=>$profesor, 
                "idMateria"=>$materia, 
                "grupo" =>$request->grupo,
                "idSemestre"=>$semestre, 
                "idIdioma"=>$idioma, 
                "calificacionPromedio"=>$request->calificacionPromedio]);
        }else{
            //existe
            $request->session()->flash('error', "Esta evaluaci&oacute;n ya ha sido registrada");
            return back()->withInput();
        }

        $request->session()->flash("message", "Creado con exito");
        return redirect()->route("evaluaciones.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $evaluacion = Evaluacion::where('id' , $id)->firstOrFail();
        $deleted = $evaluacion->delete();

        if($deleted){
            $request->session()->flash("deleted", "Eliminado con &eacute;xito");
        }
        else{
            $request->session()->flash("failDeleted", "Algo sali&oacute; mal. Por favor contacta a desarrollo.");
        }
        return redirect()->route("profesores.index");
    }
}
