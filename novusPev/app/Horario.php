<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Horario extends Model
{
    protected $table = "Horarios";

    protected $fillable = ['id', 'idProfesor', 'diaDeSemana', 'horaInicio', 'horaFin'];

    protected $dates = ['horaInicio','horaFin'];
    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'idProfesor');
    }
}
