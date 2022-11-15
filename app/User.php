<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'telefono','password','apellido_p','apellido_m','register_at','verify'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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
