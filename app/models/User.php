<?php
namespace Formacom\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = "usuarios"; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'usuario_id'; // Clave primaria de la tabla

    // Desactivar los timestamps
    public $timestamps = false;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'email',
        'contraseña',
        'nombre',
        'apellidos',
        'telefono',
        'rol'
    ];

    // Relación con proyectos
    public function proyectos() {
        return $this->hasMany(Proyecto::class, "usuario_id");
    }

    // Relación con comentarios
    public function comentarios() {
        return $this->hasMany(Comentario::class, "usuario_id");
    }

    // Método para verificar el rol del usuario
    public function isGestor() {
        return $this->rol === 'GESTOR';
    }

    public function isColaborador() {
        return $this->rol === 'COLABORADOR';
    }
}
?>