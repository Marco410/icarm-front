<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Encontrado extends Model
{
    protected $table= "encontrado";
    public $timestamps = false;


    protected $fillable = [
        'clave', 'Nombre', 'ApellidoPaterno','ApellidoMaterno','Sexo','Edad','EstadoCivil','Religion','Correo','Telefono','Referencia1','TelRef1','Referencia2','TelRef2','Bautizado','Asistencia','celular','descelular','fecharegistro','enfermedad','nopenieles','claveanterior','estatus'
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
