<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Profesor;
use App\Campus;
use App\Pais;
use App\Director;
use App\Departamento;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesores = Profesor::all();
        foreach ($profesores as $profesor)
        {
            $departamento = Profesor::find($profesor->id)->departamentos()->get();
            $profesor->departamento = $departamento[0]->nombre;
            $profesor->pais_de_origen = Profesor::find($profesor->id)->paisDeOrigen()->get()[0]->nombre;
            $director = Departamento::find($departamento[0]->id)->directores()->get();
            $profesor->director = $director[0]->nombre . " " . $director[0]->apellido;
        }
        return view('profesores.index', ['profesores' => $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $campus = Campus::select('nombre')->get();
        // foreach ($campus as $cnombre) {
        //     $nombres_campus[] = $cnombre->nombre;
        // }

        $paises = Pais::select('nombre')->get();
        foreach ($paises as $pais){
            $nombres_paises[] = $pais->nombre;
        }

        $departamentos = Departamento::select('nombre')->get();
        foreach ($departamentos as $departamento) {
            $nombres_departamentos[] = $departamento->nombre;
        }

        return  view('profesores.create', ['paises'=>$nombres_paises, 'nombresDepartamentos'=>$nombres_departamentos]);
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
            "nomina" => "required|string",
            "nombre" => "required|string",
            "apellido" => "required|string",
            // "campus" => "required|string",
            "idPaisOrigen" => "required|string",
            "idPaisResidencia" => "required|string",
            "email_itesm" => "required|string",
            "email_personal" => "required|string",
            "experiencia" => "required|string",
            "idDepartamento" => "required|string",
            "image" => "image",
            ]);

        if ($request->hasFile("image")){
            $path = $request->image->store('public');
        }else{ 
            $path = "public/noImgUser.png";
        }

        $nombres = [];
        $index = $request->idPaisOrigen;

        $paises = Pais::select('nombre')->get();

        foreach ($paises as $pais) {
            $nombres[] = $pais->nombre;
        }

        $paisOrigen = Pais::where('nombre', $nombres[$index])->first()->id;
        $index = $request->idPaisResidencia;
        $paisResidencia = Pais::where('nombre', $nombres[$index])->first()->id;

        $nombres = [];
        $index = $request->idDepartamento;

        $departamentos = Departamento::select('nombre')->get();

        foreach ($departamentos as $departamento) {
            $nombres[] = $departamento->nombre;
        }

        $departamento = Departamento::where('nombre', $nombres[$index])->first()->id;

        $alreadyExists = Profesor::where('email_itesm',$request->emailItesm)->count();

        if($alreadyExists == 0){
            //no existe
            $profesor = Profesor::create([
                "nomina"=>$request->nomina, 
                "nombre"=>$request->nombre, 
                "apellido"=>$request->apellido, 
                "email_itesm"=>$request->emailItesm, 
                "email_personal"=>$request->emailPersonal, 
                "experiencia"=>$request->experiencia, 
                "foto"=>$path, 
                "pais_origen_id"=>$paisOrigen, 
                "pais_residencia_id"=>$paisResidencia, 
                "zona_horaria"=>"Mexico",
                "activo" => true
            ]);
            echo $profesor;
            DB::table('departamento_profesor')->insert([
                "departamento_id" => $departamento,
                "profesor_id" => $profesor->id
            ]);
        }else{
            //existe
            $request->session()->flash('error', "Este profesor ya ha sido registrado");
            return back()->withInput();
        }

        $request->session()->flash("message", "Creado con exito");
        return redirect()->route("profesores.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor = Profesor::where('id', $id)->firstOrFail();
        return view('profesores.show', ['profesor' => $profesor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $campus = Campus::select('nombre')->get();
        // foreach ($campus as $cnombre) {
        //     $nombres_campus[] = $cnombre->nombre;
        // }
        $paises = Pais::select('nombre')->get();
        foreach ($paises as $pais) {
            $nombres_paises[] = $pais->nombre;
        }
        $departamentos = Departamento::select('nombre')->get();
        foreach ($departamentos as $departamento) {
            $nombres_departamentos[] = $departamento->nombre;
        }
        $profesor = Profesor::where('id', $id)->firstOrFail();
        return view('profesores.edit', ['profesor' => $profesor, 'paises'=>$nombres_paises, 'nombresDepartamentos'=>$nombres_departamentos]);
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
        $profesor = Profesor::where('id' , $id)->firstOrFail();
        $this->validate($request,[
            "nomina" => 'required|string',
            "nombre" => "required|string",
            "apellido" => "required|string",
            "idPaisOrigen" => "required|string",
            "idPaisResidencia" => "required|string",
            "email_itesm" => "required|string",
            "email_personal" => "required|string",
            "experiencia" => "required|string",
            "idDepartamento" => "required|string",
            "image" => "image",
        ]);

        $updating = $request->all();
        if ($request->hasFile('foto')){
            $updating['foto'] = $request->image->store("public");
        }

        $nombres = [];
        $index = $request->idPaisOrigen;

        $paises = Pais::select('nombre')->get();

        foreach ($paises as $pais) {
            $nombres[] = $pais->nombre;
        }

        $paisOrigen = Pais::where('nombre', $nombres[$index])->first()->id;
        $index = $request->idPaisResidencia;
        $paisResidencia = Pais::where('nombre', $nombres[$index])->first()->id;

        $updating['pais_origen_id'] = $paisOrigen;
        $updating['pais_residencia_id'] = $paisResidencia;

        $nombres = [];
        $index = $request->idDepartamento;

        $departamentos = Departamento::select('nombre')->get();

        foreach ($departamentos as $departamento) {
            $nombres[] = $departamento->nombre;
        }

        // TODO: ACTUALIZAR TABLA INTERMEDIA
        $departamento = Departamento::where('nombre', $nombres[$index])->first()->id;

        $alreadyExists = Profesor::where('email_itesm',$request->emailItesm)->where('id', '<>' ,$id)->count();

        if($alreadyExists == 0){
        //no existe
            $profesor->update($updating);
        }else{
        //existe
            $request->session()->flash('error', "Este profesor ya ha sido registrado");
            return back()->withInput();
        }
        $request->session()->flash("message", "Datos actualizados con exito");
        return redirect()->route("profesores.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $profesor = Profesor::where('id' , $id)->firstOrFail();
        $deleted = $profesor->delete();

        if($deleted){
            $request->session()->flash("deleted", "Eliminado con &eacute;xito");
        }
        else{
            $request->session()->flash("failDeleted", "Algo sali&oacute; mal. Por favor contacta a desarrollo.");
        }
        return redirect()->route("profesores.index");
    }
}
