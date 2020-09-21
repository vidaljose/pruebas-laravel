<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    protected function mostrar(){
        return view('login');
    }
    protected function login(Request $request){
        //
        $user = Usuario::where('usuario',$request->usuario)->first();
        if($user != null){
            if($user -> usuario == $request -> usuario && $user -> pass == $request -> pass){
                session(['usuario' => $request -> usuario]);
                // session()->flash('usuario',$request -> usuario);
                // dd(session('usuario'));
                return redirect('/inicio');
            }else{
                return view('login');
            }
        }else{
            return view('login');
           
        }
    }
    protected function out(Request $request){
        $request -> session() -> flush();
        return redirect('/inicio');
    }
}
