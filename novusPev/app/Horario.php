<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Horario extends Model
{
    protected $table = "Horarios";
 
    protected $fillable = ['id', 'idProfesor', 'diaDeSemana', 'horaInicio', 'horaFin'];
 
    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'idProfesor');
    }
}