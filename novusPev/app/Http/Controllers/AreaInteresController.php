<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AreaInteres;

class AreaInteresController extends Controller
{


    public function index()
    {
        return view('areasInteres.index', ['areasInteres' => AreaInteres::all()]);
    }

     public function create()
    {
        return view('areasInteres.create');
    }


    public function store(Request $request)
    {
        $message = "";
        $this->validate($request,[
            "AreaDeInteres" => "required|string",
            ]);

        $alreadyExists = AreaInteres::where('AreaDeInteres',$request->AreaDeInteres)->count();

        if($alreadyExists == 0){
            //no existe
            AreaInteres::create(["AreaDeInteres"=>$request->AreaDeInteres]);
        }else{
            //existe
            $request->session()->flash('error', "Esta area de interes ya ha sido registrada");
            return back()->withInput();
        }

        $request->session()->flash("message", "Creado con exito");
        return redirect()->route("areasInteres.index");
    }

    public function destroy(Request $request, $id)
    {
        $AreaInteres = AreaInteres::where('id' , $id)->firstOrFail();
        $deleted = $AreaInteres->delete();

        if($deleted){
            $request->session()->flash("deleted", "Eliminado con &eacute;xito");
        }
        else{
            $request->session()->flash("failDeleted", "Algo sali&oacute; mal. Por favor contacta a desarrollo.");
        }
        return redirect()->route("areasInteres.index");
    }
}
