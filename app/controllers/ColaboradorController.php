<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\Models\User;

class ColaboradorController extends Controller {

    public function index(...$params) {
        if (!isset($_SESSION["usuario_id"])) {
            header("Location: " . base_url() . "login");
            exit();
        }

        $usuario_id = $_SESSION["usuario_id"];
        $projects = []; 
        $colaboradores = [];
        
        $this->view('gestor/dashboard', ["projects" => $projects, "colaboradores" => $colaboradores]);
    }

    public function nuevoColaborador() {
        if (!isset($_SESSION["usuario_id"])) {
            header("Location: " . base_url() . "login");
            exit();
        }

        $this->view('nuevocolaborador');
    }

    public function crearColaborador() {
        if (!isset($_SESSION["usuario_id"])) {
            header("Location: " . base_url() . "login");
            exit();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'] ?? '';
            $contraseña = $_POST['contraseña'] ?? '';
            $nombre = $_POST['nombre'] ?? '';
            $apellidos = $_POST['apellidos'] ?? '';
            $telefono = $_POST['telefono'] ?? '';
            $foto = $_POST['foto'] ?? '';

            // Validación básica
            if (empty($email) || empty($contraseña) || empty($nombre) || empty($apellidos)) {
                echo "Todos los campos obligatorios deben ser completados.";
                return;
            }

            // Verificar si el email ya existe
            $existingUser = User::where("email", $email)->first();
            if ($existingUser) {
                echo "El email ya está registrado.";
                return;
            }

            // Crear el nuevo colaborador
            $colaborador = new User();
            $colaborador->email = $email;
            $colaborador->contraseña = password_hash($contraseña, PASSWORD_BCRYPT); // Encripta la contraseña
            $colaborador->nombre = $nombre;
            $colaborador->apellidos = $apellidos;
            $colaborador->telefono = $telefono;
            $colaborador->foto = $foto; 
            $colaborador->rol = 'COLABORADOR'; 
            $colaborador->save();

            // Redirigir al listado de colaboradores con un mensaje de éxito
            header("Location: " . base_url() . "gestor/dashboard?mensaje=Colaborador creado con éxito");
            exit();
        }

        // Si no es una solicitud POST, muestra la vista
        $this->view('colaborador/nuevocolaborador');
    }
}
?>