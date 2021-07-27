<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=['Todos'];
        return response()->json(
            ['data'=>$projects,
        'msg'=>[
            'summary'=>'consulta correcta',
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
    public function store(Request $request)
    {
        $project='Creado';
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
    public function show($id)
    {
        $project='Buscando';
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
        $project='Eliminaod';
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
    public function updateState()
    {
        $project='aprobado';
        return response()->json(
            ['data'=>$project,
        'msg'=>[
            'summary'=>'Actualizado correctamente',
            'detail'=>'el estado se actualizo correctamnte',
            'code'=>'201'
        ]
        ],201
        );
    }
}
