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
}