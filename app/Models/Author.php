<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //use HasFactory;
    protected $table = 'authors';//nombre en plurar
    protected $fillable = ['age','name',
    'telephone',
    'identificacion',
    'email'];
//un proyecto tiene un autor(uno a uno)
    /*function project(){
        return $this->belongsTo(Project::class);
    }*/
//un autor tiene una o varias publicaciones
    /*function project(){
        return $this->belongsTo(Project::class);
    }*/
//varios a varios
    function projects(){//va en plurar
        return $this->belongsToMany(Project::class)->withTimestamps();
    }
}
