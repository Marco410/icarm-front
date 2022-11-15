<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Asistencia extends Model
{
    protected $table= "alumnos_has_asistencia";


    protected $fillable = [
        'alumno_id','active'
    ];

    public function alumno(){
        return $this->hasMany(Alumno::class);
    }

    public function comments(){
        return $this->hasMany(Reviews::class);
    }

  
}
