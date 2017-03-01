<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
   protected $table = "Departamentos";

    protected $fillable = ['id', 'departamento', 'idCampus'];

    public function campus()
    {
    	return $this->belongsTo(Campus::class, 'idCampus');
    }

    public function materias()
    {
    	return $this->hasMany(Materia::class, 'idDepartamento');
    }

    public function directores(){
        return $this->hasOne(Director::class,'id_departamento');
    }
}
