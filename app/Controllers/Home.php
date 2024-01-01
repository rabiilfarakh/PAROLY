<?php
namespace App\Controllers;
use App\Core\Controller;
class Home extends Controller{
    public function index($name = ""){
        $user = $this->model('User');
        $user->name = $name;

        $this->view('Home/index', ['name' => $user->name]);
    }
    public function about($name = ""){
        $user = $this->model('User');
        $user->name = $name;

        $this->view('Home/about', ['name' => $user->name]);
    }

}