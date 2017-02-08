<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = "Materias";

    protected $fillable = ['id', 'materia', 'idDepartamento'];

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class, 'idMateria');
    }

    public function departamentos()
    {
    	return $this->belongsTo(Departamento::class, 'idDepartamento');
    }
}
