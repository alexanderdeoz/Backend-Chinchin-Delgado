<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PokemonController;

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

Route :: get ('/',function(){
    return 'welcom';
});

Route::get('pokemons/{pokemon}/skills',[PokemonController ::class,'index']);

Route::get('pokemons/{pokemon}/skills/{skill}', [PokemonController ::class,'show']);


Route::post('pokemons/{pokemon}/skills', [PokemonController ::class,'store']); //pendiente



Route::put('pokemons/{pokemon}/skills/{skill}',[PokemonController ::class,'update']);



Route::delete('pokemons/{pokemon}/skills/{skill}', [PokemonController ::class,'destroy']);




//Route :: apiResource('pokemons/{pokemon}/skills',[PokemonController ::class,'store','index']);


//agrupar rutas
// rutas en singular cuando tenga funcionalidades diferentes a un crud
/*
---------------------------------------------------------------------------------------
Route :: prefix('project')->group(function(){
    //declaracion derutas
    //funcionalidades en conjunto
    //funcionalidades extra
   Route ::prefix('{project}')->group(function(){
       //est seccion necesita el id
    Route :: patch('state',[ProjectController ::class,'updateState']); 
   });
   Route ::prefix('')->group(function(){
       //esta secccion no necesita el id
    Route :: patch('state',[ProjectController ::class,'updateState']); 
   });
});
--------------------------------------------------------------------------------------------------------
/*
Route :: prefix('project')->group(function(){
    //declaracion derutas
    //funcionalidades especificas
    Route :: patch('{project}/states',[ProjectController ::class,'updateState']); 
});

*/

