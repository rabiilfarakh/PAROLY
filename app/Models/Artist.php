<?php
namespace App\Models;
use App\Models\User;
use App\Core\Database;
use App\Core\Model;
use App\Helpers\Functions;
use PDOException;
use pdo;

class Artist extends User
{
    private $dbh;

    public function __construct(){
        Model::__construct("Artist");
        $this->dbh = Database::getInstance();
        $this->dbh = $this->dbh->connect();
    }

    public function lg($email,$pwd){
        try {
            
            $query = "SELECT * FROM artist WHERE email = :email AND password = :pwd";
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pwd', $pwd);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            die("error in finding by a column" . $ex->getMessage());
        }
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
            $stmt = $this->dbh->prepare("UPDATE artist SET token = ? WHERE userId = ?");
            $stmt->execute([$code, $userId]);
        }catch(PDOException $ex){
            die("error in finding by a column" . $ex->getMessage());
        }
    }

    


}