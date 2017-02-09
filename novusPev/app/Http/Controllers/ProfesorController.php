<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profesor;
use App\Campus;
use App\Pais;
use App\Director;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profesores.index', ['profesores' => Profesor::all()]);
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
            $nombres_campus[] = $cnombre->nombre;
        }

        $paises = Pais::select('nombre')->get();
        foreach ($paises as $pais){
            $nombres_paises[] = $pais->nombre;
        }
        
        $directores = Director::select('nombre', 'apellido')->get();
        foreach ($directores as $director){
            $nombres_directores[] = $director->nombre . " " . $director->apellido;
        }

        return  view('profesores.create', ['campus'=>$nombres_campus, 'paises'=>$nombres_paises, 'nombresDirectores'=>$nombres_directores]);
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
            "campus" => "required|string",
            "idPaisOrigen" => "required|string",
            "idPaisResidencia" => "required|string",
            "emailItesm" => "required|string",
            "emailPersonal" => "required|string",
            "experiencia" => "required|string",
            "idDirector" => "required|string",
            "image" => "image",
            ]);

        if ($request->hasFile("image")){
            $path = $request->image->store('public');
        }else{ 
            $path = "public/noImgUser.png";
        }

        $index = $request->campus;

        $campi = Campus::select('nombre')->get();

        foreach ($campi as $cnombre) {
            $nombres[] = $cnombre->nombre;
        }

        $campus = Campus::where('nombre', $nombres[$index])->first()->id;

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
        $index = $request->idDirector;

        $directores = Director::select('nombre')->get();

        foreach ($directores as $director) {
            $nombres[] = $director->nombre;
        }

        $director = Director::where('nombre', $nombres[$index])->first()->id;

        $alreadyExists = Director::where('emailItesm',$request->emailItesm)->count();

        if($alreadyExists == 0){
            //no existe
            Profesor::create([
                "nomina"=>$request->nomina, 
                "nombre"=>$request->nombre, 
                "apellido"=>$request->apellido, 
                "idPaisOrigen"=>$paisOrigen, 
                "idPaisResidencia"=>$paisResidencia, 
                "link"=>"",
                "emailItesm"=>$request->emailItesm, 
                "emailPersonal"=>$request->emailPersonal, 
                "foto"=>$path, 
                "experiencia"=>$request->experiencia, 
                "idDirector"=>$director, 
                "campus"=>$campus
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
        $campus = Campus::select('nombre')->get();
        foreach ($campus as $cnombre) {
            $nombres_campus[] = $cnombre->nombre;
        }
        $paises = Pais::select('nombre')->get();
        foreach ($paises as $pais) {
            $nombres_paises[] = $pais->nombre;
        }
        $directores = Director::select('nombre', 'apellido')->get();
        foreach ($directores as $director) {
            $nombres_directores[] = $director->nombre . " " . $director->apellido;
        }
        $profesor = Profesor::where('id', $id)->firstOrFail();
        return view('profesores.edit', ['profesor' => $profesor, 'campus'=>$nombres_campus, 'paises'=>$nombres_paises, 'nombresDirectores'=>$nombres_directores]);
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
            "nombre" => "required|string",
            "apellido" => "required|string",
            "campus" => "required|string",
            "idPaisOrigen" => "required|string",
            "idPaisResidencia" => "required|string",
            "emailItesm" => "required|string",
            "emailPersonal" => "required|string",
            "experiencia" => "required|string",
            "idDirector" => "required|string",
            "image" => "image",
        ]);

        $updating = $request->all();
        if ($request->hasFile('foto')){
            $updating['foto'] = $request->image->store("public");
        }

        $index = $request->campus;

        $campi = Campus::select('nombre')->get();

        foreach ($campi as $cnombre) {
            $nombres[] = $cnombre->nombre;
        }

        $campus = Campus::where('nombre', $nombres[$index])->first()->id;

        $updating['campus'] = $campus;

        $nombres = [];
        $index = $request->idPaisOrigen;

        $paises = Pais::select('nombre')->get();

        foreach ($paises as $pais) {
            $nombres[] = $pais->nombre;
        }

        $paisOrigen = Pais::where('nombre', $nombres[$index])->first()->id;
        $index = $request->idPaisResidencia;
        $paisResidencia = Pais::where('nombre', $nombres[$index])->first()->id;

        $updating['idPaisOrigen'] = $paisOrigen;
        $updating['idPaisResidencia'] = $paisResidencia;

        $nombres = [];
        $index = $request->idDirector;

        $directores = Director::select('nombre')->get();

        foreach ($directores as $director) {
            $nombres[] = $director->nombre;
        }

        $director = Director::where('nombre', $nombres[$index])->first()->id;

        $updating['idDirector'] = $director;

        $alreadyExists = Profesor::where('emailItesm',$request->emailItesm)->where('id', '<>' ,$id)->count();

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
