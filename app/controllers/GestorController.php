<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\Models\Proyecto;
use Formacom\Models\User;

class GestorController extends Controller
{
    public function index(...$params)
    {
        if (!isset($_SESSION["usuario_id"])) {
            header("Location: " . base_url() . "login");
            exit();
        }

        $usuario_id = $_SESSION["usuario_id"];
        $projects = Proyecto::where("usuario_id", $usuario_id)->get();

        //Leer los colaboradores
        $colaboradores = User::where("rol", "COLABORADOR")->get();

        $this->view('dashboard', ["projects" => $projects, "colaboradores" => $colaboradores]);
    }

    public function nuevoProyecto()
    {
        if (!isset($_SESSION["usuario_id"])) {
            header("Location: " . base_url() . "login");
            exit();
        }


        $this->view('nuevo-proyecto');
    }
    public function crearProyecto()
    {
        if (!isset($_SESSION["usuario_id"])) {
            header("Location: " . base_url() . "login");
            exit();
        }

        $usuario_id = $_SESSION["usuario_id"];

        $titulo = $_POST['titulo'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        if (empty($titulo) || empty($descripcion)) {
            echo "Todos los campos son obligatorios.";
            return;
        }

        $proyecto = new Proyecto();
        $proyecto->titulo = $titulo;
        $proyecto->descripcion = $descripcion;
        $proyecto->usuario_id = $usuario_id; // Asociar el proyecto con el usuario autenticado
        $proyecto->save();  // Guardar el proyecto en la base de datos

        // Redirigir de vuelta al dashboard
        header("Location: " . base_url() . "dashboard");
        exit();
    }

}
?>