<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Alumno extends Model
{
    protected $table= "alumnos";


    protected $fillable = [
        'nombre','apellido_p','apellido_m','telefono','fecha_nacimiento','asistencia'
    ];

    public function asistencia(){
        return $this->hasMany(Asistencia::class);
    }

    public function comments(){
        return $this->hasMany(Reviews::class);
    }

    public function agencies_claim(){
        return $this->hasMany(ClaimAgency::class);
    }

    public function citas(){
        return $this->hasManyThrough(Cita::class, Agencias::class,'id','agencia_id','user_id','id');
    }
}
