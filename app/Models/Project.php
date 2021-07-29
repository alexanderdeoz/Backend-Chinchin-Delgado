<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //use HasFactory;
    protected $table = 'projects';//nombre en plurarl
    protected $fillable = ['code',
    'description',
    'date',
    'is_approved',
    'title'];

//casteadores conversiones
    protected $casts = [
        'is_approved' => 'booleam',
        'date'=> 'datatime:Y-m-d',

    ];
//un proyecto un solo autor(uno a uno)
    /*public function author(){
        return $this->hasOne(Author::class);
    } */
//un pyoyecto tiene varios autores
    public function authors(){
        return $this->hasMany(Author::class);
    }
    //mutatadores
    function setCodeAttribute($value){
        $this->attributes['code']=strtoupper($value);
    }

    function setDateAttribute($value){
        $this->attributes['date']=($value);
    }

    function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
    //accesos
    function getCodeAttributes(){
        return strtolower ($this -> attributes['code']);
    }
//un proyecto tiene varios autores(varios a varios)
/*public function authors(){
    return $this->belongsToMany(Author::class);
}*/
}
