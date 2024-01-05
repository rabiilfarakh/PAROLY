<?php
namespace App\Models;
use App\Models\User;
use App\Core\Database;
use App\Helpers\Functions;
use PDOException;

class Artist extends User
{
    private $dbh;

    public function __construct(){
        parent::__construct("Artist");
        $this->dbh = Database::getInstance();
        $this->dbh = $this->dbh->connect();
    }
    public function newPwd($email){
        $result = $this->findByColumnName("email", $email);
        return $result[0];
    }
    public function up($password,$userId){
        try{
            $stmt = $this->dbh->prepare("UPDATE artist SET password = ? WHERE userId = ?");
            $stmt->execute([$password, $userId]);
        }catch(PDOException $ex){
            die("error in finding by a column" . $ex->getMessage());
        }
    }

    public function upT($code,$userId){
        try{
            $stmt = $this->db->prepare("UPDATE artist SET token = ? WHERE userId = ?");
            $stmt->execute([$code, $userId]);
        }catch(PDOException $ex){
            die("error in finding by a column" . $ex->getMessage());
        }
    }


}