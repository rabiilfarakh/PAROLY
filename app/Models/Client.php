<?php

namespace App\Models;
use App\Models\User;
use App\Core\Database;
use PDOException;
use pdo;
use App\Core\Model;
class Client extends User
{
    private $dbh;
    public function __construct(){
        Model::__construct("client");
        $this->dbh = Database::getInstance();
        $this->dbh = $this->dbh->connect();
        
    }
    public function statistics(){
        return $this->count("userId");
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

public function newPwd($email){
    $result = $this->findByColumnName("email", $email);
    return $result[0];
}
public function up($password,$userId){
    try{
        $stmt = $this->dbh->prepare("UPDATE client SET password = ? WHERE userId = ?");
        $stmt->execute([$password, $userId]);
    }catch(PDOException $ex){
        die("error in finding by a column" . $ex->getMessage());
    }
}

public function upT($code,$userId){
    try{
        $stmt = $this->dbh->prepare("UPDATE client SET token = ? WHERE userId = ?");
        $stmt->execute([$code, $userId]);
    }catch(PDOException $ex){
        die("error in finding by a column" . $ex->getMessage());
    }
}
}