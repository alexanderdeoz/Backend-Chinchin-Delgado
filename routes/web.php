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



Route::get('pokemons/{pokemon}/especie', function (){
    return ['fuego','Planta'];
});
Route::get('pokemons/{pokemon}/especie/{habilidad}', function (){
    return ['Buscando'];
});
Route::post('pokemons/{pokemon}/especie', function (){
    return "Creado";
});
Route::put('pokemons/{pokemon}/especie/{habilidad}', function (){
    return "Actualizado";
});
Route::delete('pokemons/{pokemon}/especie/{habilidad}', function (){
    return "Eliminado";
});