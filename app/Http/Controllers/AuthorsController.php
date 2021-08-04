<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::get();
        //$book = ['book1 Jane Austen','book2 Paula Hawkins'];
        return response()->json(
           ['data'=> $authors,
           'msg'=>['sumary'=> 'consulta correcta',
           'detail'=>'la consulta esta correcta', 
           'code'=>'201']], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $authors = new Author();
        //$nationality = Nationality::find($request->nationality['id']);
       /* $authors->books()->associate($book);
        $authors->nationality()->associate($nationality);*/

        $authors->names = $request->names;
        $authors->email = $request->email;
        $authors->age = $request->age;
        $authors->identification = $request->identification;
        $authors->phone = $request->phone;

        $authors->save();
        return response()->json(
        [
            'data' => $authors,
            'msg' => [
                'summary' => 'Creado correctamente',
                'detail' => 'El autor se creo correctamente',
                'code' => '201'
            ]
        ], 201
    );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Author $authors)
    {
        $authors = Book::find($authors);
        //$book = 'book1';
        return response()->json(
            [
                'data' => $authors,
                'msg' => [
                    'summary' => 'consulta correcta',
                    'detail' => 'la consulta del autor se ejecutó correctamente',
                    'code' => '200'
                ]
            ], 200
        );;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $authors)
    {
        $authors= Author::find($authors);
        $authors->age= $request->age;
        $authors->name= $request->name;
        $authors->identification= $request->identification;
        $authors->email= $request->email;
        $authors->phone=$request->phone;
        $authors->save();
        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'Actualizado correctamente',
                    'detail' => 'EL autor se actualizó correctamente',
                    'code' => '201'
                ]
            ], 201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $authors)
    {
        $authors= Book::find($authors);
        $authors->delete();
        $authors = 'Eliminado';
        return response()->json(
            [
                'data' => $authors,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'EL proyecto se eliminó correctamente',
                    'code' => '201'
                ]
            ], 201
        );
}
}
