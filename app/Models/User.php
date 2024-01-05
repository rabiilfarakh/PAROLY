<?php

namespace App\Models;
use PDO;
use PDOException;
use App\Core\Model;
use App\Helpers\Functions;
use App\Core\Database;
abstract class User extends Model
{
    private $userId;
    private $name;
    private $username;
    private $email;
    private $password;
    private $profileImage;
    private $token;
    private $dbh;
    
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get($property){
        return $this->$property;
    }
   

    public function __construct (){

        $this->dbh = Database::getInstance();
        $this->dbh = $this->dbh->connect();
}

    public function lg($email,$pwd){
        try {
            
            $query = "SELECT * FROM client WHERE email = :email AND password = :pwd";
            $stmt = $this->dbh->prepare($query);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pwd', $pwd);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            die("error in finding by a column" . $ex->getMessage());
        }
    }

    public function Login($email, $password){
        $result = $this->findByColumnName("email", $email);
        if(count($result) > 0){
            $user = $result[0];
            if(password_verify($user["password"], $password)){
                return $user;
            }else {
                return 1;
            }
        }else {
            return 0;
        }
    }
    public function Register($data){
        $this->add($data);
    }
}