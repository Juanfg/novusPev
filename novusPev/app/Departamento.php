<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
   protected $table = "departamentos";

    protected $fillable = ['id', 'nombre', 'activo'];

    public function campus()
    {
    	return $this->belongsToMany('App\Campus', 'campus_departamento');
    }

    public function materias()
    {
    	return $this->hasMany('App\Materia');
    }

    public function directores()
    {
        return $this->belongsToMany('App\Director','departamento_director')->withPivot('semestre_id');
    }

    public function profesores()
    {
        return $this->belongsToMany('App\Profesor','departamento_profesor')->withPivot('semestre_id');
    }

    public function semestres()
    {
        return $this->belongsToMany('App\Semestre', 'departamento_director', 'departamento_id', 'semestre_id')->withPivot('director_id');
    }
}
