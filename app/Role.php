<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable=[
    	'name','slug','description'
    ];

    //PROCESO DE CREAR MODELOS
    //relaciones

    public function permissions(){
    	return $this->hasMany('App\Permission');
    }

    public function users(){
    	return $this->belongsToMany('App\User')->withTimestamps();
    }


    //almacenamiento
    //validacion
    //recuperacion de informacion
    //otras operaciones
}
