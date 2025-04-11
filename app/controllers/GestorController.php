<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\Models\Proyecto;
use Formacom\Models\User;

class GestorController extends Controller
{
    public function index(...$params){
    if (!isset($_SESSION["usuario_id"])) {
        header("Location: " . base_url() . "login");
        exit();
    }

    $usuario_id = $_SESSION["usuario_id"];
    
    // Obtener todos los proyectos del usuario actual
    $projects = Proyecto::where("usuario_id", $usuario_id)->get();

    // Leer los colaboradores
    $colaboradores = User::where("rol", "COLABORADOR")->get();

    // Pasar los proyectos y colaboradores a la vista
    $this->view('dashboard', [
        "projects" => $projects,
        "colaboradores" => $colaboradores
    ]);
    }

    public function nuevoProyecto() {
    
        if (!isset($_SESSION["usuario_id"])) {
            header("Location: " . base_url() . "login");
            exit();
        }
    
        $this->view('nuevoproyecto');
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
        $proyecto->usuario_id = $usuario_id; 
        $proyecto->save();

        $this->view('dashboard', ["mensaje" => "Proyecto creado con éxito."]);
        header("Location: " . base_url() . "gestor");
        

        exit();
    }

    public function detalleProyecto($id){    
    
        if (!isset($_SESSION["usuario_id"])) {
            header("Location: " . base_url() . "login");
            exit();
        }
    
        // Obtén el proyecto por su ID
        $proyecto = Proyecto::find($id);
    
        if (!$proyecto) {
            echo "El proyecto no existe.";
            return;
        }
    
        // Carga la vista del detalle del proyecto
        $this->view('detalleproyecto', ["proyecto" => $proyecto]);
    }

    public function editarProyecto($id)
    {
        if (!isset($_SESSION["usuario_id"])) {
            header("Location: " . base_url() . "login");
            exit();
        }
    
        $proyecto = Proyecto::find($id);
    
        if (!$proyecto) {
            echo "El proyecto no existe.";
            return;
        }
    
        if ($proyecto->usuario_id != $_SESSION["usuario_id"]) {
            echo "No tienes permiso para editar este proyecto.";
            return;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $proyecto->titulo = $_POST['titulo'] ?? $proyecto->titulo;
            $proyecto->descripcion = $_POST['descripcion'] ?? $proyecto->descripcion;
    
            $proyecto->save();
            header("Location: " . base_url() . "gestor/dashboard");
            exit();
        }

        $this->view('editarproyecto', ["proyecto" => $proyecto]);
    }
    public function eliminarProyecto($id){

    if (!isset($_SESSION["usuario_id"])) {
        header("Location: " . base_url() . "login");
        exit();
    }

    $proyecto = Proyecto::find($id);

    if (!$proyecto) {
        echo "El proyecto no existe.";
        return;
    }

    if ($proyecto->usuario_id != $_SESSION["usuario_id"]) {
        echo "No tienes permiso para eliminar este proyecto.";
        return;
    }

    $proyecto->delete();

    header("Location: " . base_url() . "gestor/dashboard");
    exit();
}

    
}
?>

    








  