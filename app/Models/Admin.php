<?php

namespace App\Models;
use App\Models\User;
class Admin extends User
{
    public function __construct (){
        parent::__construct("admin");
    }


}