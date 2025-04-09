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

    public function login(...$params){
        if(isset($_POST["email"])){
            $user=User::where("email",$_POST["email"])->first();
            if($user && password_verify($_POST["contraseña"],$user->contraseña)){
                session_start();
                $_SESSION["email"]=$user->email;
                header("Location: ".base_url()."gestor/home");

            }else{
                $error="User or password incorrect";
                $this->view("login", ["error" => "User or password incorrect"]);

            }
            //var_dump($user->password);
            
            exit();
        }else{
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
                $user->nombre=$_POST['nombre'];
                $user->email=$_POST['email'];
                $user->contraseña=password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
                $user->rol='GESTOR';
                $user->save();
                header("Location: ".base_url()."login");
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