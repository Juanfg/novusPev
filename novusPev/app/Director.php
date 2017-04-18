<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = "directores";

    protected $fillable = ['id','nomina', 'nombre', 'apellido','campus_id', 'email_itesm', 'email_personal', 'foto', 'activo'];
    
    public function campus()
    {
        return $this->belongsTo('App\Campus');
    }

    public function departamentos(){
        return $this->belongsToMany('App\Departamento', 'departamento_director')->withPivot('semestre_id');
    }
}
