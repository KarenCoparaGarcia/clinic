<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //PROCESO DE CREAR MODELOS
    //relaciones

    public function permissions(){
        return $this->belongsToMany('App\Permission')->withTimestamps();
    }

    public function roles(){
        return $this->belongsToMany('App\Role')->withTimestamps();
    }


    //almacenamiento
    //validacion
    //recuperacion de informacion
    //otras operaciones
}
