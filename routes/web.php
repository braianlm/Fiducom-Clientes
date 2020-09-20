<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/login', function () {
    return view('login');
});

Route::post('/login', 'ClienteController@login');


// Vistas Hardcode

Route::get('/home', function(){
    return view('home-logged');
});
Route::get('/cuenta', function(){
    return view('cuenta');
});
Route::get('/informar-pago', function(){
    return view('informar-pago');
});
Route::get('/historial-pagos', function(){
    return view('historial-de-pagos');
});
Route::get('/estado-cuenta', function(){
    return view('estado-de-cuenta');
});
Route::get('/datos-bancarios', function(){
    return view('datos-bancarios');
});
Route::get('/contrato-fideicomiso', function(){
    return view('contrato-fideicomiso');
});
Route::get('/contrato-adhesion', function(){
    return view('contrato-adhesion');
});
Route::get('/presupuesto', function(){
    return view('presupuesto');
});
Route::get('/novedades', function(){
    return view('novedades');
});
Route::get('/informes-obras', function(){
    return view('informes-obras');
});
Route::get('/contactanos', function(){
    return view('contactanos');
});

Route::get('/2da-home', function(){
    return view('2da-home');
});
Route::get('/contratos', function(){
    return view('contratos');
});
Route::get('/noticias', function(){
    return view('noticias');
});
