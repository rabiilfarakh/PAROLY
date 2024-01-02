<?php
namespace App\Controllers;
use App\Core\Controller;
class Home extends Controller{
    public function index(){
        $this->view('Home/index');
    }
    public function about($name = ""){
        $user = $this->model('User');
        $user->name = $name;

        $this->view('Home/about', ['name' => "hello from about page"]);
    }

}