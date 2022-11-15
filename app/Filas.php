<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Filas extends Model
{
    protected $table= "filas";

    public $timestamps = false;


    protected $fillable = [
        'grupo', 'Fila', 'Silla','Asignado','Clave'
    ];


    public function agencies(){
        return $this->hasMany(UserAgency::class);
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
