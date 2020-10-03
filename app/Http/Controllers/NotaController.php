<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Nota;


class NotaController extends Controller
{
    
     public function crear(Request $request){
        $nota = new Nota();
        $nota -> titulo = $request -> titulo;
        $nota -> contenido = $request -> contenido;
        $nota -> save();
        //dd($nota); //genial :D 
        // dd($nota);
        //return view('save');
        return redirect('/inicio');
    }

    public function mostrar(){
        // session(['cosas' =>'unaCosa']);
        // dd(session('gato'));
        if (session('usuario') != null){
            return view('welcome',['nota' => Nota::get()]);
        }
        return redirect('/login');
    }
    public function mostrarLogin(){

        return view('login');
    }
}
