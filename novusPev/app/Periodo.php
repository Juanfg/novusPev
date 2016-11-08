<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $table = "Periodos";

    protected $fillable = ['id', 'periodo'];

    public function semestres()
    {
        return $this->hasMany(Semestre::class, 'idPeriodo');
    }
}
