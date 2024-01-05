<?php

namespace Models;
use \App\Core\Model;
use App\Models\User;
use App\Core\Database;
class Playlist extends Model
{
    private $playlistId;
    private $playlistName;
    private $createdAt;
    private $user;
    private $dbh;

    public function __construct (){

        $this->dbh = Database::getInstance();
        $this->dbh = $this->dbh->connect();
}
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }
}