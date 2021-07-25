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


Route ::get('pokemons',function(){
    return ['Fuego','Planta'];
});
Route ::get('pokemons/{especie}/{id}',function(){
    return ['planta','fuego',['chariza']];
});
Route ::post('pokemons/{especie}',function(){
    return ['charmander creado '];
});
Route ::put('pokemons/{id}',function(){
    return 'pokemon actualizado';
});

Route ::delete('pokemons/{especie}/{id}',function(){
    return 'Eliminado poquemon';
});