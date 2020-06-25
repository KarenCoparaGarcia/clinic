<?php

namespace App;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable=[
    	'name','description','slug'
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

    public function store($request)
    {
        $slug=Str::slug($request->name, '-');
        alert('Exito','El Rol se ha guardado', 'success')->showConfirmButton();
        return self::create($request->all()+[
            'slug' => $slug,
        ]);
    }

    public function my_update($request)
    {
        $slug=Str::slug($request->name, '-');
        return self::update($request->all()+[
            'slug' => $slug,
        ]);
    }

    //validacion
    //recuperacion de informacion
    //otras operaciones
}
