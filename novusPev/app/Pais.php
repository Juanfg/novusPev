<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = "paises";

    protected $fillable = ['id', 'nombre', 'activo'];

    public function profesoresOrigenes()
    {
        return $this->hasMany('App\Profesor', 'pais_origen_id');
    }

    public function profesoresResidencias()
    {
        return $this->hasMany('App\Profesor', 'pais_residencia_id');
    }
}
