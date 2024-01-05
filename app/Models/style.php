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
        $this->dbh = Database::getInstance();
        $this->dbh = $this->dbh->connect();
        
    }
    
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }

    // public function addStyle($data){
    //     Functions::dd($data);
    //     $this->add($data);
    // }

    public function addstyle(Style $style){
        $conn = $this->dbh;
        $styleName =$style->styleName;
        $query = "INSERT INTO style  (styleName) VALUE (:styleName)";
        $result = $conn->prepare($query);
        $result->bindParam(":styleName" , $styleName);
        $result->execute();
    }

    public function displayStyle(){
        $conn = $this->dbh;
        $query = "SELECT * FROM style";
        $result = $conn->prepare($query);
        $result->execute();
        $styles = $result->fetchAll(PDO::FETCH_OBJ);  
        return $styles;
    }
    
    
}
