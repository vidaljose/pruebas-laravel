<?php

namespace app\Http\Controllers\DatosController;

use Illuminate\Http\Request;
use app\Models\Nota;

class DatosController extends Controller
{
    // public function crear(Request $request){
    //     $nota = new Nota();
    //     $nota -> titulo = $request -> titulo;
    //     $nota -> contenido = $request -> contenido;
    // }

    public function mostrar(){
        return view('welcome');
    }
}
