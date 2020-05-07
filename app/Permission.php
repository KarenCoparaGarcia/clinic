<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $fillable=[
    	'name','slug','description'
    ];
    //PROCESO DE CREAR MODELOS
    //relaciones

    public function role(){
    	return $this->belongsTo('App\Role');
    }

    public function users(){
    	return $this->belongsToMany('App\User')->withTimestamps();
    }


    //almacenamiento
    //validacion
    //recuperacion de informacion
    //otras operaciones
}
