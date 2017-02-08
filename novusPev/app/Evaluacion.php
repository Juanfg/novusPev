<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = "Evaluaciones";

    protected $fillable = ['id', 'idProfesor', 'idMateria','grupo', 'idSemestre', 'idIdioma', 'calificacionPromedio'];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'idProfesor');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'idMateria');
    }

    public function semestre()
    {
        return $this->belongsTo(Semestre::class, 'idSemestre');
    }

    public function idioma()
    {
        return $this->belongsTo(Idioma::class, 'idIdioma');
    }
}
