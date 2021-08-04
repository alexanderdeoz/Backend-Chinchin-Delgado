<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
   protected $table = 'app.books';//nombre en plurar
    protected $fillable = ['code',
    'date',
    'description',
    'genere',
    'title',
    'n_pages',];

    protected $casts = [
        'date'=> 'datatime:Y-m-d',
        'n_pages' => 'number',
    ];
//
   /* public function authors(){
        return $this->hasOne(Author::class);
    } */
//
    public function authors(){
        return $this->hasMany(Author::class);
    } 
//
/*public function authors(){
    return $this->belongsToMany(Author::class);

}*/
}