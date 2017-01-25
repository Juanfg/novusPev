<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Campus;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departamentos.index', ['departamentos' => Departamento::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campus = Campus::select('nombre')->get();
        foreach ($campus as $cnombre) {
            $nombres[] = $cnombre->nombre;
        }
        return view('departamentos.create', ['campus'=>$nombres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = "";
        $this->validate($request,[
            "departamento" => "required|string",
            "idCampus" => "required|string",
        ]);

        $index = $request->idCampus;

        $campi = Campus::select('nombre')->get();

        foreach ($campi as $cnombre) {
            $nombres[] = $cnombre->nombre;
        }

        $campus = Campus::where('nombre', $nombres[$index])->first()->id;

        $alreadyExists = Departamento::where('departamento',$request->departamento)->count();

        if($alreadyExists == 0){
            //no existe
            Departamento::create(["departamento"=>$request->departamento, "idCampus"=>$campus]);
        }else{
            //existe
            $request->session()->flash('error', "Este departamento ya ha sido registrado");
            return back()->withInput();
        }

        $request->session()->flash("message", "Creado con exito");
        return redirect()->route("departamentos.index");
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
        $campus = Campus::select('nombre')->get();
        $nombres = [];
        foreach ($campus as $cnombre) {
            $nombres[] = $cnombre->nombre;
        }
        $departamento = Departamento::where('id', $id)->firstOrFail();
        return view('departamentos.edit', ['departamento' => $departamento, 'campus'=>$nombres]);
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
        $departamento = departamento::where('id' , $id)->firstOrFail();
        $this->validate($request,[
            "departamento" => "required|string",
            "idCampus" => "required|string",
        ]);

        $updating = $request->all();

        $index = $request->idCampus;

        $campi = Campus::select('nombre')->get();

        foreach ($campi as $cnombre) {
            $nombres[] = $cnombre->nombre;
        }

        $campus = Campus::where('nombre', $nombres[$index])->first()->id;

        $updating['campus'] = $campus;

        $alreadyExists = Departamento::where('departamento',$request->departamento)->where('id', '<>' ,$id)->count();

        if($alreadyExists == 0){
        //no existe
            $departamento->update($updating);
        }else{
        //existe
            $request->session()->flash('error', "Este departamento ya ha sido registrado");
            return back()->withInput();
        }
        $request->session()->flash("message", "Datos actualizados con exito");
        return redirect()->route("departamentos.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $departamento = Departamento::where('id' , $id)->firstOrFail();
        $deleted = $departamento->delete();

        if($deleted){
            $request->session()->flash("deleted", "Eliminado con &eacute;xito");
        }
        else{
            $request->session()->flash("failDeleted", "Algo sali&oacute; mal. Por favor contacta a desarrollo.");
        }
        return redirect()->route("departamentos.index");
    }
}
