<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Horario;
use App\Profesor;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('horarios.index', ['horarios' => Horario::all()]);
    }

    public function destroy(Request $request, $id)
    {
        $horario = Horario::where('id' , $id)->firstOrFail();
        $deleted = $horario->delete();

        if($deleted){
            $request->session()->flash("deleted", "Eliminado con &eacute;xito");
        }
        else{
            $request->session()->flash("failDeleted", "Algo sali&oacute; mal. Por favor contacta a desarrollo.");
        }
        return redirect()->route("horarios.index");
    }

    public function create()
    {
        $profesores = Profesor::select('nombre', 'apellido')->get();
        foreach ($profesores as $profesor){
            $nombres_profesores[] = $profesor->nombre . " " . $profesor->apellido;
        }

        return  view('horarios.create', ['profesores'=>$nombres_profesores]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            "idProfesor" => "required|string",
            "diaDeSemana" => "required|string",
            "horaInicio" => "required|string",
            "horaFin" => "required|string",
            ]);

        $profesores = Profesor::all();
        foreach ($profesores as $profesor){
            $nombres_profesores[] = $profesor->nombre;
        }

        $index = $request->idProfesor;

        $profesor = Profesor::where('nombre', $nombres_profesores[$index])->first()->id;

        $alreadyExists = 0;

        if($alreadyExists == 0){
            //no existe
            Horario::create(["idProfesor"=>$profesor, "diaDeSemana"=>$request->diaDeSemana, "horaInicio"=>$request->horaInicio, "horaFin"=>$request->horaFin]);
        }else{
            //existe
            $request->session()->flash('error', "Este horario ya ha sido registrada");
            return back()->withInput();
        }

        $request->session()->flash("message", "Creado con exito");
        return redirect()->route("horarios.index");
    }

}
