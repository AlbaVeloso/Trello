<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
use Formacom\Models\Comentarios;
class Gestores extends Model{
    protected $table="usuarios";
    protected $primaryKey = 'usuario_id';
    public function proyectos(){
        return $this->hasMany(Proyectos::class,"proyecto_id");
    }
    public function comentarios(){
        return $this->hasMany(Comentarios::class,"comentario_id");
    }
}

?>