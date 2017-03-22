<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = "Directores";

    protected $fillable = ['id','nomina', 'nombre', 'apellido','id_departamento', 'emailItesm', 'emailPersonal', 'foto', 'campus'];

    public function profesores()
    {
    	return $this->hasMany(Profesor::class, 'idDirector');
    }

    public function campus()
    {
        return $this->belongsTo(Campus::class, 'id');
    }

    public function departamentos()
    {
        return $this->belongsTo(Departamento::class,'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
