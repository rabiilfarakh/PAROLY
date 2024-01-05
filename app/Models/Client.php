<?php

namespace App\Models;
use App\Models\User;
use App\Core\Database;
class Client extends User
{
    private $dbh;
    public function __construct(){
        parent::__construct("client");
        $this->dbh = Database::getInstance();
        $this->dbh = $this->dbh->connect();
        
    }

}