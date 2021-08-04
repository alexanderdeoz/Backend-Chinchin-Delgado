<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 


class ProjectController extends Controller
{/*
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index()
   // {SQL
        // $projects = DB::select('select * from app.projects');

        // QUERY BUILDER
        // $projects = DB::table('app.projects')->get();

        // ELOQUENT
    //     $projects = Project::get();
    //     return response()->json(
    //         ['data'=>$projects,
    //     'msg'=>[
    //         'summary'=>'consulta correcta',
    //         'detail'=>'la consulta de pokemon esta correcta',
    //         'code'=>'201'
    //     ]
    //     ],201
    //     );
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {//SQL
        /*$project = DB::insert('insert into app.projects (code,date,description,approved,title,created_at,updated_at)
                            values (?,?,?,?,?,?,?)', [
            $request->code,
            $request->date,
            $request->description,
            $request->approved,
            $request->title,
            $request->created_at,
            $request->updated_at,
        ]);*/
        //QUERY BUILDER

        //ELOQUENT
      /*  $project _ Project::create([
            $request->code,
            $request->date,
            $request->description,
            $request->approved,
            $request->title,
            $request->created_at,
            $request->updated_at
        ]);*/
        //ELOQUENT 2
        // $project= new Project();
        // $project->code= $request->code;
        // $project->date= $request->date;
        // $project->description= $request->description;
        // $project->approved= $request->approved;
        // $project->title=$request->title;
        // $project->save();



    //     $project='Creado';
    //     return response()->json(
    //         ['data'=>$project,
    //     'msg'=>[
    //         'summary'=>'consulta correcta',
    //         'detail'=>'la consulta de pokemon esta correcta',
    //         'code'=>'201'
    //     ]
    //     ],201
    //     );
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
       * @return \Illuminate\Http\Response
     */
    // public function show($project){

        //SQL
        // $projects = DB::select('select * from app.projects where id = ?', [$project]);

        // QUERY BUILDER
        // $project = DB::table('app.projects')->where('id', '=', $project)->first();

        // ELOQUENT
    //     $project = Project::find($project);

    //     return response()->json(
    //         ['data'=>$project[0],
    //     'msg'=>[
    //         'summary'=>'consulta correcta',
    //         'detail'=>'la consulta de pokemon esta correcta',
    //         'code'=>'201'
    //     ]
    //     ],201
    //     );
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // { 
    //     $project= Project::find($project);
    //     $project->code= $request->code;
    //     $project->date= $request->date;
    //     $project->description= $request->description;
    //     $project->approved= $request->approved;
    //     $project->title=$request->title;
    //     $project->save();
    //     return response()->json(
    //         ['data'=>null,
    //     'msg'=>[
    //         'summary'=>'consulta correcta',
    //         'detail'=>'la consulta de pokemon esta correcta',
    //         'code'=>'204'
    //     ]
    //     ],204
    //     );
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//     public function destroy($id)
//     {
//         $project= Project::find($project);
//         $project->delete();
//         $project='Eliminado';
//         return response()->json(
//             ['data'=>$project,
//         'msg'=>[
//             'summary'=>'consulta correcta',
//             'detail'=>'la consulta de pokemon esta correcta',
//             'code'=>'201'
//         ]
//         ],201
//         );
//     }
//     public function updateState()
//     {
//         $project='aprobado';
//         return response()->json(
//             ['data'=>$project,
//         'msg'=>[
//             'summary'=>'Actualizado correctamente',
//             'detail'=>'el estado se actualizo correctamnte',
//             'code'=>'201'
//         ]
//         ],201
//         );
//     }
 }
