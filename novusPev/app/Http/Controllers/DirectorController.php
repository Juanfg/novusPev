<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Director;
use App\Campus;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('directores.index', ['directores' => Director::all()]);
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
        return view('directores.create', ['campus'=>$nombres]);
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
            "nombre" => "required|string",
            "apellido" => "required|string",
            "campus" => "required|string",
            "emailItesm" => "required|string",
            "emailPersonal" => "required|string",
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

        $alreadyExists = Director::where('emailItesm',$request->emailItesm)->count();

        if($alreadyExists == 0){
            //no existe
            Director::create(["nombre"=>$request->nombre, "apellido"=>$request->apellido, "emailItesm"=>$request->emailItesm, "emailPersonal"=>$request->emailPersonal, "foto"=>$path, "campus"=>$campus]);
        }else{
            //existe
            $request->session()->flash('error', "Este director ya ha sido registrado");
            return back()->withInput();
        }

        $request->session()->flash("message", "Creado con exito");
        return redirect()->route("directores.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $director = Director::where('id', $id)->firstOrFail();
        return view('directores.show', ['director' => $director]);
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
        $director = Director::where('id', $id)->firstOrFail();
        return view('directores.edit', ['director' => $director, 'campus'=>$nombres]);
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
        $message = "";
        do{
            $director = Director::where('id' , $id)->firstOrFail();
            $this->validate($request,[
                "nombre" => "required|string",
                "apellido" => "required|string",
                "campus" => "required|string",
                "emailItesm" => "required|string",
                "emailPersonal" => "required|string",
                "image" => "image",
                ]);

            if ($request->hasFile('image')){
                $updating['foto'] = $request->image->store("public");
            }

            $index = $request->campus;

            $campi = Campus::select('nombre')->get();

            foreach ($campi as $cnombre) {
                $nombres[] = $cnombre->nombre;
            }

            $campus = Campus::where('nombre', $nombres[$index])->first()->id;

            $updating['campus'] = $campus;

            $alreadyExists = Director::where('emailItesm',$request->emailItesm)->where('id', '<>' ,$id)->count();

            if($alreadyExists == 0){
            //no existe
                $director->update($updating);
            }else{
            //existe
                $request->session()->flash('error', "Este director ya ha sido registrado");
                return back()->withInput();
            }
        }while(false);
        $request->session()->flash("message", "Datos actualizados con exito");
        return redirect()->route("directores.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $director = Director::where('id' , $id)->firstOrFail();
        $deleted = $director->delete();

        if($deleted){
            $request->session()->flash("deleted", "Eliminado con &eacute;xito");
        }
        else{
            $request->session()->flash("failDeleted", "Algo sali&oacute; mal. Por favor contacta a desarrollo.");
        }
        return redirect()->route("directores.index");
    }
}
