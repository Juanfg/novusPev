<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = "Paises";

    protected $fillable = ['id', 'nombre'];

    public function profesoresOrigenes()
    {
        return $this->hasMany(Profesor::class, 'idPaisOrigen');
    }

    public function profesoresResidencias()
    {
        return $this->hasMany(Profesor::class, 'idPaisResidencia');
    }
}
