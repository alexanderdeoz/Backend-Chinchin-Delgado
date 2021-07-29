<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   // use HasFactory;
   protected $table = 'books';//nombre en plurarl
    protected $fillable = ['author',
    'date',
    'genere',
    'title',
    'n_pages',];

    protected $casts = [
        'date'=> 'datatime:Y-m-d',
        'n_pages' => 'number',
    ];
//
   /* public function author(){
        return $this->hasOne(Author::class);
    } */
//
    public function author(){
        return $this->hasMany(Author::class);
    } 
//
/*public function authors(){
    return $this->belongsToMany(Author::class);

}*/
}