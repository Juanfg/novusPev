<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Semestre;
use App\Periodo;

class SemestreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('semestres.index', ['semestres' => Semestre::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodos = Periodo::select('periodo')->get();
        foreach ($periodos as $periodo){
            $nombres_periodos[] = $periodo->periodo;
        }

        return  view('semestres.create', ['periodos'=>$nombres_periodos]);
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
            "idPeriodo" => "required|string",
            "anio" => "required|string",
            ]);

        $index = $request->idPeriodo;

        $periodos = Periodo::select('periodo')->get();

        foreach ($periodos as $periodo) {
            $nombres[] = $periodo->periodo;
        }

        $periodo = Periodo::where('periodo', $nombres[$index])->first()->id;

        $alreadyExists = Semestre::where([  ['idPeriodo', $periodo], ['anio', $request->anio] ])->count();

        if($alreadyExists == 0){
            //no existe
            Semestre::create(["idPeriodo"=>$periodo, "anio"=>$request->anio]);
        }else{
            //existe
            $request->session()->flash('error', "Este semestre ya ha sido registrado");
            return back()->withInput();
        }

        $request->session()->flash("message", "Creado con exito");
        return redirect()->route("semestres.index");
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
        $semestre = Semestre::where('id' , $id)->firstOrFail();
        $deleted = $semestre->delete();

        if($deleted){
            $request->session()->flash("deleted", "Eliminado con &eacute;xito");
        }
        else{
            $request->session()->flash("failDeleted", "Algo sali&oacute; mal. Por favor contacta a desarrollo.");
        }
        return redirect()->route("semestres.index");
    }
}
