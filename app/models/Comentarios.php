<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;


class Comentarios extends Model{
    protected $table="comentarios";
    protected $primaryKey = 'comentario_id';

    public $timestamps = false;


}

?>