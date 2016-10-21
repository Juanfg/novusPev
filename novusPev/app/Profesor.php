<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = "Profesores";

    protected $fillable = ['id', 'nombre', 'apellido', 'idPaisOrigen', 'idPaisResidencia', 'link', 'emailItesm', 'emailPersonal', 'foto', 'experiencia', 'idDirector', 'campus'];

    public function director()
    {
    	return $this->belongsTo(Director::class, 'idDirector');
    }
}
