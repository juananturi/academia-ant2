<?php

use Illuminate\Support\Facades\Route;
//Primero se invoca la clase con su ruta
use App\Http\Controllers\MiControlador;
use App\Http\Controllers\HeladeriaController;
use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;

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

Route::get('/', function () {
    return view('curso.bienvenido');
});

Route::get('/curso/nosotros', function () {
    return view('curso.nosotros');
});

//los parametros van entre llaves
Route::get('/minombre/{nombre}', function ($nombre) {
    return 'Hola, soy '. $nombre;
});

//Ruta llamada suma. El resultado será: la suma de a + b es:
Route::get('/suma/{a}/{b}', function($a, $b){
    $sum = $a + $b;
    return 'La suma de a + b es: ' . $sum;
});

/*Menciono la clase y el metodo como un array, debo usar la palabra reservada class,
el metodo va dentro de comilla simple*/
Route::get('/rutamulti/{a}/{b}',[MiControlador::class,'multipli']);

Route::get('/heladeria/{opc}', [HeladeriaController::class,'totalHelado']);

Route::get('/precios/{opc}', [ControladorPrecios::class,'precio']);

Route::get('/iva/{nom}/{val}', [ControladorPrecios::class,'getIVA'] );

Route::resource('curso', CursoController::class);

Route::resource('docente', DocenteController::class);

Route::resource('estudiante', EstudianteController::class);
