<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancion;

class CancionController extends Controller
{
    //
    public function index(){
        $songs = Cancion::get();
        return view('inicio',['canciones'=>$songs]);
    }

    public function agregarCancion(Request $peticion){
        $cancion = new Cancion();
        $cancion->titulo = $peticion->titulo;
        $cancion->album = $peticion->album;
        $cancion->grupo = $peticion->grupo;
        $cancion->anio = $peticion->anio;
        $cancion->save();
        session()->flash("mensaje", "La cancion se ha insertado correctamente");
        return redirect()->route('inicio');//->with("mensaje", "La cancion se ha insertado correctamente"); Seria otra forma de hacer el mensaje temporal
    }

    public function eliminarCancion(Request $peticion){
        $ideliminar = $peticion->route('id');
        $cancion = Cancion::findOrFail($ideliminar);
        $cancion->delete();
        return redirect()->route('inicio')->with('mensaje', "Cancion eliminada correctamente");
    }

    public function editarCancion(Request $peticion){
        $ideditar = $peticion->route('id');
        $cancion = Cancion::findOrFail($ideditar);
        return view('editarCancion',['cancion'=>$cancion]);
    }   
}
