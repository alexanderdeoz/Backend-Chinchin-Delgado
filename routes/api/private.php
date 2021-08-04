<?php
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BooksController;
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

/*
Route ::get('projects',function(){
    $project = ['projects1','project2', 'project3'];
    return response()->json(
        [
            'data' => $project,
            'msg' => [
                'summary' => 'consulta correcta',
                'detail' => 'la consulta del proyecto se ejecutó correctamente',
                'code' => '200'
            ]
        ], 200
    );
    
});
Route ::get('projects/{project}',function(){
    $project = 'project1';
    return response()->json(
        [
            'data' => $project,
            'msg' => [
                'summary' => 'consulta correcta',
                'detail' => 'la consulta del proyecto se ejecutó correctamente',
                'code' => '200'
            ]
        ], 200
    );
    
});
Route ::post('projects',function(){
    $project = 'project1';
    return response()->json(
        [
            'data' => $project,
            'msg' => [
                'summary' => 'Creado correctamente',
                'detail' => 'El proyecto se creo correctamente',
                'code' => '201'
            ]
        ], 201
    );
    
});
Route ::put('projects/{project}',function(){
    $project = 'project1';
    return response()->json(
        [
            'data' => null,
            'msg' => [
                'summary' => 'Actualizado correctamente',
                'detail' => 'EL proyecto se actualizó correctamente',
                'code' => '201'
            ]
        ], 201
    );
    
});
Route ::delete('projects/{project}',function(){
    $project = 'project1';
    return response()->json(
        [
            'data' => $project,
            'msg' => [
                'summary' => 'Eliminado correctamente',
                'detail' => 'EL proyecto se eliminó correctamente',
                'code' => '201'
            ]
        ], 201
    );
    
});
//----------------------------------------------
Route::apiResource('projects',ProjectsController::class);//

Route::prefix('project')->group(function () {//en singular para evitar conflictos con el api resourse
    Route::prefix('{project}')->group(function () {
        Route::patch('state',[ProjectsController::class,'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state',[ProjectsController::class,'updateState']);
    });
});

//--------------------------- */
//Route:: apiResource('projects.authors', AuthorsController::class); api resourse sirve para crear un conjunto de rutas para una api 
Route::get('books/{book}/authors',[BooksController ::class,'index']);

Route::get('books/{book}/authors/{author}', [BooksController ::class,'show']);

Route::post('books/{book}/authors', [BooksController ::class,'store']); 

Route::put('books/{book}/authors/{author}',[BooksController ::class,'update']);

Route::delete('books/{book}/authors/{author}', [BooksController ::class,'destroy']);


Route::apiResource('books/{book}/authors',BooksController::class);

//-------------------
Route::prefix('book/{book}/author/{author}')->group(function () {
   Route::patch('state',[BooksController::class,'updateState']);
});


