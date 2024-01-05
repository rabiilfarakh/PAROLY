<?php

<<<<<<< HEAD
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
    public function getStyles(){
        return $this->getAll();
    }
    
    
}
=======
require_once 'database.php';
class Style {
    private $styleId;
    private $styleName;

    public function __construct() {
        $this->db = DATABASE::getconnection();
    }

    public function __get ($param) {
        return $this->$param;
    }

    public function __set ($param,$value){
        $this->$param = $value;
    }

    public function getallstyles () {
        $get = $this->db->query("SELECT * FROM style");
        $result = $get->fetchALL(PDO::FETCH_ASSOC);
        $styles = [];
        foreach ($result as $row) {
            $Styles = new Style();
            $Styles->__set('styleId',$row['styleId']);
            $Styles->__set('styleName',$row['styleName']);
            $styles [] = $Styles;
        }
        return $styles;
    }
}
>>>>>>> f06f4296c981915c37b7421dee40808520c1e4ec
