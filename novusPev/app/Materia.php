<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = "materias";

    protected $fillable = ['id', 'clave', 'nombre', 'departamento_id', 'activo'];

    public function evaluaciones()
    {
        return $this->hasMany('App\Evaluacion');
    }

    public function departamento()
    {
    	return $this->belongsTo('App\Departamento');
    }
}
