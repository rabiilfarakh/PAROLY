<?php

namespace App\Models;
use App\Core\Model;
abstract class User extends Model
{
    private $userId;
    private $name;
    private $username;
    private $email;
    private $password;
    private $profileImage;
    private $token;
    
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get($property){
        return $this->$property;
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