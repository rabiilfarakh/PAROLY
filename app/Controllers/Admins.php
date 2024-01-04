<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Helpers\Functions;
class Admins extends Controller
{
    public function login()
    {
        $this->view("Authentication/login");
        if (isset($_POST['login'])) {
            $clientObject = $this->model("Admin");
            $result = $clientObject->Login($_POST['email'], $_POST['password']);
            if ($result == 0) {
                echo "user not found";
            } else if ($result == 1) {
                echo "incorrect password ";
            } else {
                header("Location: ". APP_URL . "public/Admin/dashboard");
            }
        }
    }
    public function dashboard (){
        $this->view("Admin/dashboard");
    }
    public function calendrier (){
        $this->view("Admin/calendrier");
    }
    public function lyrics (){
        $this->view("Admin/lyrics");
    }
    public function style (){
        $this->view("Admin/style");
    }
    public function reclamations (){
        $this->view("Admin/reclamations");
    }
    public function playlist (){
        $this->view("Admin/playlist");
    }

}