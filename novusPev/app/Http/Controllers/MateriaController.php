<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Departamento;
use App\Materia;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('materias.index', ['materias' => Materia::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamento = Departamento::select('departamento')->get();
        foreach ($departamento as $dDepartamento){
            $departamentos[] = $dDepartamento->departamento;
        }
        return view('materias.create', ['departamento'=>$departamentos]);
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
            "materia" => "required|string",
            "idDepartamento" => "required|string",
            ]);
        $index = $request->idDepartamento;
        $depti = Departamento::select('departamento')->get();

        foreach ($depti as $dDepartamento) {
            $departamentos[] = $dDepartamento->departamento;
        }

        $departamento = Departamento::where('departamento', $departamentos[$index])->first()->id;

        $alreadyExists = Materia::where('materia',$request->materia)->count();

        if($alreadyExists == 0){
            //no existe
            Materia::create(["materia"=>$request->materia, "idDepartamento"=>$departamento]);
        }else{
            //existe
            $request->session()->flash('error', "Esta materia ya ha sido registrado");
            return back()->withInput();
        }

        $request->session()->flash("message", "Creado con exito");
        return redirect()->route("materias.index");
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
        $materia = Materia::where('id' , $id)->firstOrFail();
        $deleted = $materia->delete();

        if($deleted){
            $request->session()->flash("deleted", "Eliminado con &eacute;xito");
        }
        else{
            $request->session()->flash("failDeleted", "Algo sali&oacute; mal. Por favor contacta a desarrollo.");
        }
        return redirect()->route("materias.index");
    }
}
