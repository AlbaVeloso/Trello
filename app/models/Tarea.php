<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
use Formacom\Models\Comentarios;
class Tarea extends Model{
    protected $table="tareas";
    protected $primaryKey = 'tarea_id';
    public $timestamps = false;

    public function comentarios(){
        return $this->hasMany(Comentarios::class,"comentario_id");
    }

}

?>