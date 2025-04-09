<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
use Formacom\Models\Comentarios; // Ensure this path is correct
class User extends Model{
    protected $table="usuarios";
    protected $primaryKey = 'usuario_id';
    // Desactivar los timestamps
    public $timestamps = false;
    public function proyectos(){
        return $this->hasMany(Proyectos::class,"proyecto_id");
    }
    public function comentarios(){
        return $this->hasMany(Comentarios::class,"comentario_id");
    }
}

?>