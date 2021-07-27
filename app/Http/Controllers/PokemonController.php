<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pokemon )
    {
        $pokemons=['Todos llegamos'];
        return response()->json(
            ['data'=>$pokemons,
        'msg'=>[
            'summary'=>'consulta correcta  Todos',
            'detail'=>'la consulta de pokemon esta correcta',
            'code'=>'201'
        ]
        ],201
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($pokemon)
    {
        $project='Creado Pokemon';
        return response()->json(
            ['data'=>$project,
        'msg'=>[
            'summary'=>'consulta correcta',
            'detail'=>'la consulta de pokemon esta correcta',
            'code'=>'201'
        ]
        ],201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pokemon,$skill)
    {
        $project='Buscando Pokemon especifico con skil';
        return response()->json(
            ['data'=>$project,
        'msg'=>[
            'summary'=>'consulta correcta',
            'detail'=>'la consulta de pokemon esta correcta',
            'code'=>'201'
        ]
        ],201
        );
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
        return response()->json(
            ['data'=>null,
        'msg'=>[
            'summary'=>'consulta correcta',
            'detail'=>'la consulta de pokemon esta correcta',
            'code'=>'204'
        ]
        ],204
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
        $project='Eliminado completado';
        return response()->json(
            ['data'=>$project,
        'msg'=>[
            'summary'=>'consulta correcta',
            'detail'=>'la consulta de pokemon esta correcta',
            'code'=>'201'
        ]
        ],201
        );
    }
}
