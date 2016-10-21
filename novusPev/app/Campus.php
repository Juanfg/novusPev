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
}
