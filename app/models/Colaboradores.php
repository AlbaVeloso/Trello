<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
use Formacom\Models\Comentarios;
class Colaboradores extends Model{
    protected $table="usuarios";
    protected $primaryKey = 'usuario_id';

    public function tareas(){
        return $this->hasMany(Tareas::class,"tarea_id");
    }

    public function comentarios(){
        return $this->hasMany(Comentarios::class,"comentarios_id");
    }

}

?>