<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
use Formacom\Models\Tareas;
class Proyecto extends Model{
    protected $table="proyectos";
    protected $primaryKey = 'proyecto_id';
    public $timestamps = false;
    public function tareas(){
        return $this->hasMany(Tarea::class,"tarea_id");
        
    }
    protected $fillable = [
        'titulo',
        'descripcion',
        'usuario_id'
    ];

}
?>