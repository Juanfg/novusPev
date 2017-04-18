<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Horario extends Model
{
    protected $table = "horarios";
 
    protected $fillable = ['id', 'hora_inicio', 'hora_fin', 'dia_semana', 'activo'];
 
    public function profesores()
    {
        return $this->belongsToMany('App\Profesor', 'horario_profesor');
    }
}