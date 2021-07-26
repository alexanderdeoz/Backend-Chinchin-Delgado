<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//return $request->user();
//});


Route ::get('projects',function(){
    return ['v1','ya valio',['Como estas ']];
});
Route ::get('projects/{project}',function(){
    return 'Proyecto1';
});
Route ::post('projects',function(){
    return "creado";
});
Route ::put('projects/{project}',function(){
    return 'actualizado';
});

Route ::delete('projects/{project}',function(){
    return 'Eliminado';
});

//--------------
Route::get('books/{book}/title', function (){
    return ['book1, pride and prejuice','the train girl'];
});
Route::get('books/{book}/title/{title}', function (){
    return ['book1, pride and prejuice','book2, the train girl'];
});
Route::post('books/{book}/title', function (){
    return "Creado";
});
Route::put('books/{book}/title/{title}', function (){
    return "Actualizado";
});
Route::delete('books/{book}/title/{title}', function (){
    return "Eliminado";
});
