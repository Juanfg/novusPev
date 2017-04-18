<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $fillable = ['anio', 'periodo_id', 'activo'];

    public function evaluaciones()
    {
        return $this->hasMany('App\Evaluacion');
    }

    public function periodo()
    {
        return $this->belongsTo('App\Periodo');
    }

    public function departamentos()
    {
        return $this->belongsToMany('App\Departamento', 'departamento_director');
    }
}
