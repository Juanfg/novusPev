<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $table = "Campus";

    protected $fillable = ['id', 'nombre'];

    public function departamentos()
    {
    	return $this->hasMany(Departamento::class, 'idCampus');
    }

    public function profesores()
    {
        return $this->hasMany(Profesor::class, 'campus');
    }

    public function directores()
    {
        return $this->hasMany('App\Director');
    }
}
