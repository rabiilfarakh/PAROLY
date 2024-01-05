<?php

class Controller {
    public function model($model) {
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
<<<<<<< HEAD
    public function view($view, $data = [])
    {
        require_once '../App/Views/' . $view . '.php';
=======

    public function view ($view,$data = []){
        require_once '../app/views/' .$view . '.php';
>>>>>>> f06f4296c981915c37b7421dee40808520c1e4ec
    }
}