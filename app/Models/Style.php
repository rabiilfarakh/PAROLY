<?php

namespace App\Models;
use App\Helpers\Functions;
use  App\Core\Model;
use PDO;
use App\Core\Database;

class Style extends Model
{
    private $styleId;
    private $styleName;
    private $dbh;
    public function __construct(){
        parent::__construct("style");
//        $this->dbh = Database::getInstance();
//        $this->dbh = $this->dbh->connect();
    }
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }
     public function addStyle($data){
         $this->add($data);
     }
    public function getStyles(){
        return $this->getAll();
    }
    public function statistics(){
        return $this->count("styleId");
    }
    
    
}
