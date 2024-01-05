<?php

namespace App\Models;
use App\Models\User;
use App\Core\Database;
class Admin extends User
{
    private $dbh;
    public function __construct (){
        parent::__construct("admin");

            $this->dbh = Database::getInstance();
            $this->dbh = $this->dbh->connect();
        
    }


}