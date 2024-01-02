<?php

namespace Models;
use App\Models\User;
class Client extends User
{
    public function __construct(){
        parent::__construct("client");
    }
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }
}