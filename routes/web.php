<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\NotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login',[UsuarioController::class,'mostrar']);
Route::post('/login',[UsuarioController::class,'login']);

Route::post('/out',[UsuarioController::class,'out']);
// Route::get('/out',[UsuarioController::class,'outView']);

Route::get('/inicio',[NotaController::class,'mostrar']);
Route::post('/inicio',[NotaController::class,'crear']);
// Route::get('/inicio',function(){
//     return view('welcome');
// });
// Route::post('/',[DatosNotas::class,'crear']);

