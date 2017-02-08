<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class ProfesorAreaInteres extends Model
{
    protected $table = "ProfesoresAreaInteres";
    protected $fillable = ['id', 'idAreaInteres', 'idProfesor'];
    public function profesor()
    {
        return $this->hasMany(Profesor::class, 'idProfesor');
    }
    public function areaInteres()
    {
        return $this->hasMany(AreaInteres::class, 'idAreaInteres');
    }
}
