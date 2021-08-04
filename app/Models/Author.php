<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'app.authors';//nombre en plurar
    protected $fillable = ['age','name',
    'identificacion',
    'email','phone'];
//un proyecto tiene un autor(uno a uno)
    /*function books(){
        return $this->belongsTo(Book::class);
    }*/
//un autor tiene una o varias publicaciones
    function books(){
        return $this->belongsTo(Book::class);
    }
//varios a varios
    /*function books(){//va en plurar
        return $this->belongsToMany(Book::class)->withTimestamps();
    }*/
}
