<?php
namespace Models;
use App\Models\User;
class Artist extends User
{
    public function __construct(){
        parent::__construct("Artist");
    }
}