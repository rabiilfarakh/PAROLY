<?php

namespace App\Controllers;
use App\Core\Database;
use PDO;
use App\Helpers\Functions;
use App\Helpers\InputsManager as Validator;

class Users extends \App\Core\Controller
{
    private $db;

    public function register()
    {
        if (isset($_POST['register'])) {
            $roleId = (int)$_POST['role'];
            if ($roleId == 2) {
                $object = $this->model("Client");
            } else if ($roleId == 1) {
                $object = $this->model("Artist");
            }
            unset($_POST['role'], $_POST['register']);
            $userInfo = Validator::userInfo($_POST, $_FILES["profileImage"]);
            if (isset($userInfo["error"])) {
                $errors = $userInfo;
                print_r($errors);
                exit();
            }
            $object->Register($userInfo);
            header("Location: ". APP_URL . "public");
            exit();
        } else {
            $this->view("Authentication/register");
        }
    }

}  
