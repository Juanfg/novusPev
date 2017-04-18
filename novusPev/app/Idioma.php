<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $fillable = ['idioma', 'activo'];

    public function evaluaciones()
    {
        return $this->hasMany('App\Evaluacion');
    }

    public function profesores()
    {
    	return $this->belongsToMany('App\Profesor', 'idioma_profesor');
    }
}
