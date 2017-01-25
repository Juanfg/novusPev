<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfesorAreaInteres;
use App\AreaInteres;
use App\Profesor;

class ProfesoresAreaDeInteresController extends Controller
{
    public function index()
    {
        return view('profesoresAreasInteres.index', ['profesoresAreasInteres' => ProfesorAreaInteres::all()]);
    }


        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesoresAreasInteres = ProfesorAreaInteres::where('idProfesor', $id)->firstOrFail();
        return view('profesoresAreasInteres.show', ['profesoresAreasInteres' => $profesoresAreasInteres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areaInteres = AreaInteres::select('AreaDeInteres')->get();
        foreach ($areaInteres as $areasDeInteres) {
            $nombres_areaDeInteres[] = $areasDeInteres->AreaDeInteres;
        }

        $profesor = Profesor::select('nombre')->get();
        foreach ($profesor as $nprofesor){
            $nombres_profesores[] = $nprofesor->nombre;
        }
        return  view('profesoresAreasInteres.create', ['areaInteres'=>$nombres_areaDeInteres, 'profesor'=>$nombres_profesores]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            "AreaDeInteres" => "required|string",

            ]);

        $index = $request->AreaDeInteres;

        $cAreaInteres = AreaInteres::select('AreaDeInteres')->get();

        foreach ($cAreaInteres as $cnombre) {
            $nombres[] = $cnombre->AreaDeInteres;
        }

        $areaInteres = AreaInteres::where('AreaDeInteres', $nombres[$index])->first()->id;

        $request->session()->flash("message", "Agregado con exito");
        return redirect()->route("profesores.index");
    }
}
