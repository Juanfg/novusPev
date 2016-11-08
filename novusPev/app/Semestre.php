<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $table = "Semestres";

    protected $fillable = ['id', 'idPeriodo', 'anio'];

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class, 'idSemestre');
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'idPeriodo');
    }
}
