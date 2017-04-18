<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $fillable = ['nombre', 'activo'];

    public function semestres()
    {
        return $this->hasMany('App\Semestre');
    }
}
