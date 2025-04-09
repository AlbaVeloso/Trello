<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
use Formacom\Models\Tareas;
class Proyectos extends Model{
    protected $table="proyectos";
    protected $primaryKey = 'proyecto_id';
    public $timestamps = false;
    public function tareas(){
        return $this->hasMany(Tareas::class,"tarea_id");
    }

}
?>