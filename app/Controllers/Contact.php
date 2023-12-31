<?php

namespace App\Controllers;
use App\Core\Controller;

class Contact extends Controller
{
    public function index($name = ''){
        echo $name;
        echo "<br>contact index";
    }
    public function phone (){
        echo "conatct phone";
    }

}