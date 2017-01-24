<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $table = "Idiomas";

    protected $fillable = ['id', 'idioma'];

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class, 'idIdioma');
    }

    public function profesores(){
    	return $this->belongsToMany('App\Profesor');
    }
}
