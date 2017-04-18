<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = "evaluaciones";

    protected $fillable = ['profesor_id', 'materia_id', 'grupo', 'semestre_id', 'idioma_id', 'calificacion', 'activo'];

    public function profesor()
    {
        return $this->belongsTo('App\Profesor');
    }

    public function materia()
    {
        return $this->belongsTo('App\Materia');
    }

    public function semestre()
    {
        return $this->belongsTo('App\Semestre');
    }

    public function idioma()
    {
        return $this->belongsTo('App\Idioma');
    }
}
