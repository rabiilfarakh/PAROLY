<?php

namespace App\Models;
use App\Models\User;
class Client extends User
{
    public function __construct(){
        parent::__construct("client");
    }

}