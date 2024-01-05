<?php

namespace Models;
use  App\Core\Model;
use \Models\Lyrics;
use App\Core\Database;
class Reaction extends Model
{
    private $reactionId;
    private $reactionStatus;
    private $lyrics;
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