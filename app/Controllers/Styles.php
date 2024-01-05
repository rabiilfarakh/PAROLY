<?php

namespace App\Controllers;
use App\Helpers\Functions;
use App\Helpers\InputsManager as Validator;

class Styles extends \App\Core\Controller
{
    public function getStyles(){
        $object = $this->model("Style");
        return $object->getStyles();
    }
    public function addStyle(){
        ob_start();
        $style = $this->model("Style");
        $this->view("admin/addStyle");
        if(isset($_POST['addStyle'])){
            unset($_POST['addStyle']);

            $style->addStyle($_POST);
            header("Location: " . APP_URL . "public/Playlists");
        }
    }
}