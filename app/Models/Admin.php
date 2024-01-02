<?php

namespace App\Models;
use App\Models\User;
class Admin extends User
{
    public function __construct (){
        parent::__construct("admin");
    }
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }

}