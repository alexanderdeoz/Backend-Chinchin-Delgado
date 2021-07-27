<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = ['book1 Jane Austen','book2 Paula Hawkins'];
        return response()->json(
           ['data'=> $book,
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
        $book = 'book1';
    return response()->json(
        [
            'data' => $book,
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
    public function show($id)
    {
        $book = 'book1';
        return response()->json(
            [
                'data' => $book,
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
    public function update(Request $request, $id)
    {
        $book = 'book1';
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
    public function destroy($id)
    {
        $book = 'book1';
        return response()->json(
            [
                'data' => $book,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'EL proyecto se eliminó correctamente',
                    'code' => '201'
                ]
            ], 201
        );
}
}