<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = "Paises";

    protected $fillable = ['nombre', 'activo'];

    public function profesoresDeOrigen()
    {
        return $this->hasMany('App\Profesor', 'pais_origen_id');
    }

    public function profesoresDeResidencia()
    {
        return $this->hasMany('App\Profesor', 'pais_residencia_id');
    }
}
