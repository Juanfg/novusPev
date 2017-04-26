<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';

    protected $fillable = ['id','nomina', 'nombre', 'apellido', 'email_itesm', 'email_personal', 'pais_origen_id', 'pais_residencia_id', 'foto', 'experiencia', 'zona_horaria', 'activo'];

    public function departamentos()
    {
    	return $this->belongsToMany('App\Departamento', 'departamento_profesor')->withPivot('semestre_id');
    }

    public function evaluaciones()
    {
        return $this->hasMany('App\Evaluacion');
    }

    public function paisDeOrigen()
    {
        return $this->belongsTo('App\Pais', 'pais_origen_id');
    }

    public function paisDeResidencia()
    {
        return $this->belongsTo('App\Pais', 'pais_residencia_id');
    }

    public function campus()
    {
        return $this->belongsToMany('App\Campus','campus_profesor')->withPivot('semestre_id');
    }

    public function horarios()
    {
        return $this->belongsToMany('App\Horario', 'horario_profesor');
    }

    public function idiomas()
    {
        return $this->belongsToMany('App\Idioma', 'idioma_profesor');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
