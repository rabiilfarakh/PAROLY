<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Helpers\Functions;
use App\Models\Style;
class Admins extends Controller
{

    
  
    public function login()
    {
        ob_start();

        $this->view("Authentication/login");
        if (isset($_POST['login'])) {
            $clientObject = $this->model("Admin");
            $result = $clientObject->Login($_POST['email'], $_POST['password']);
            if ($result == 0) {
                echo "user not found";
            } else if ($result == 1) {
                echo "incorrect password ";
            } else {
                header("Location: ". APP_URL . "public/Admins/dashboard");
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
    public function styles (){
        $this->view("Admin/style");
    }
   
    public function addstyle(){
        $style = $this->model("Style");
//        $style = new Style();
        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            $Name = $_POST["styleName"];
                       $newstyle = new Style();
                       $newstyle->styleName = $Name ;
                       
                       $style->addstyle($newstyle);
                        header("Location:".APP_URL."public/admins/style");

                    }
        
        $this->view("admin/addstyle");
    }

    public function style()
    {
        $style = new Style();
        $styles = $style->displayStyle();
        $data = ["style" => $styles];
        $this->view("admin/style", $data);
    }
  
    public function reclamations (){
        $this->view("Admin/reclamations");
    }
    public function playlist (){
        $this->view("Admin/playlist");
    }

}