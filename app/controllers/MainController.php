<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\Models\User;


class MainController extends Controller{

    
    public function index(...$params){
        
        $this->view("home");
    }
}




?>