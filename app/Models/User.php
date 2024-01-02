<?php

namespace App\Models;
use App\Core\Model;
abstract class User extends Model
{
    public $name;
    private $userId;
    private $fullName;
    private $email;
    private $password;
    private $profileImage;
    public function Login($email, $password){
        $result = $this->findByColumnName("email", $email);
        if($result > 0){
            $user = $result[0];
            if(password_verify($user["password"], $password)){
                return $user;
            }else {
                return 0;
            }
        }else {
            return 0;
        }
    }
    public function Register($data){
        $this->add($data);
    }
}