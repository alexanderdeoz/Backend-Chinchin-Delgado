<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {// SQL
        // $projects = DB::select('select * from app.projects');

        // QUERY BUILDER
        // $projects = DB::table('app.projects')->get();

        // ELOQUENT
        $books = Book::get();
        return response()->json(
           ['data'=> $books,
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
    { //SQL
        /*$book = DB::insert('insert into app.books (code,date,description,genere,title,created_at,updated_at)
                            values (?,?,?,?,?,?,?)', [
            $request->code,
            $request->date,
            $request->description,
            $request->genere,
            $request->title,
            $request->created_at,
            $request->updated_at,
        ]);*/
        //QUERY BUILDER

        //ELOQUENT
      /*  $books= Book::create([
            $request->code,
            $request->date,
            $request->description,
            $request->genere,
            $request->title,
            $request->created_at,
            $request->updated_at
        ]);*/
        //ELOQUENT 2
        $books = new Book();
        $books->code= $request->code;
        $books->date= $request->date;
        $books->description= $request->description;
        $books->genere= $request->genere;
        $books->title=$request->title;
        $books->n_pages=$request->n_pages;
        $books->save();
        
      //$book = 'book1';
    return response()->json(
        [
            'data' => $books,
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
    public function show(Book $books)
    {// SQL
        // $projects = DB::select('select * from app.projects where id = ?', [$project]);

        // QUERY BUILDER
        // $project = DB::table('app.projects')->where('id', '=', $project)->first();

        // ELOQUENT
        $books = Book::find($books);
        return response()->json(
            [
                'data' => $books,
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
    public function update(Request $request, $books)
    {
        $books= Book::find($books);
        $books->code= $request->code;
        $books->date= $request->date;
        $books->description= $request->description;
        $books->genere= $request->genere;
        $books->title=$request->title;
        $books->n_pages=$request->n_pages;
        $books->save();
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
    public function destroy(Book $books)
    {
        $books= Book::find($books);
        $books->delete();
        $books = 'Eliminado';
        return response()->json(
            [
                'data' => $books,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'EL proyecto se eliminó correctamente',
                    'code' => '201'
                ]
            ], 201
        );
}
}