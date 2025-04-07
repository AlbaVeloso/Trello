<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
use Formacom\Models\Comentarios;
class Tareas extends Model{
    protected $table="tareas";
    protected $primaryKey = 'tarea_id';

    public function comentarios(){
        return $this->hasMany(Comentarios::class,"comentario_id");
    }

}

?>