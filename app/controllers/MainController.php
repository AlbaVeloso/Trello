<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\User;


class MainController extends Controller{

    
    public function index(...$params){
        $data = ['mensaje' => '¡Bienvenido a la página de inicio!'];
        $this->view("home");
    }

    // Removed duplicate login method
    public function login() {
            session_start();       
        if (isset($_POST["email"])) {
            $user = User::where("email", $_POST["email"])->first();
            if ($user && password_verify($_POST["contraseña"], $user->contraseña)) {
                
                $_SESSION["email"] = $user->email;
                $_SESSION["usuario_id"] = $user->usuario_id;
                $_SESSION["nombre"] = $user->nombre;
                if($user->rol == 'GESTOR'){
                    header("Location: " . base_url() . "gestor");
                }else{
                    header("Location: " . base_url() . "colaborador");
                }
                exit();  
            } else {
                $error = "Usuario o contraseña incorrectos";
                $this->view("login", ["error" => $error]);
            }
        } else {
            $this->view("login");
        }
    }
    
    
    
    

    public function register(...$params){
        if(isset($_POST["email"])){
            $user=User::where("email",$_POST["email"])->first();
            if($user){
                $error="User already exists";
                $this->view("register", [$error]);
            }else{
                $user = new User();
                $user->email=$_POST['email'];
                $user->contraseña=password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
                $user->nombre=$_POST['nombre'];
                $user->apellidos=$_POST['apellidos'];
                $user->telefono=$_POST['telefono'];
                $user->rol='GESTOR';
                $user->save();
                header("Location: ".base_url()."register");
                exit();
            }
            exit();
        }
        $this->view("register");
    }

    public function logout(...$params){
        session_destroy();
        header("Location: ".base_url()."login");
    }


}

?>