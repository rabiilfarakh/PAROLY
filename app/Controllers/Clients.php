<?php

namespace App\Controllers;
use App\Core\Controller;
class Clients extends Controller
{
    public function login()
    {
        $this->view("Authentication/login");
        if (isset($_POST['submit'])) {
            $clientObject = $this->model("Client");
            $result = $clientObject->Login($_POST['username'], $_POST['password']);
            if ($result == 0) {
                echo "user not found";
            } else if ($result == 1) {
                echo "incorrect password ";
            } else {
                print_r($result);
            }

        }
    }
}