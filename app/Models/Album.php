<?php

namespace App\Models;
use App\Models\Artist;
use App\Core\Model;
use App\Core\Database;

class Album extends Model
{
    private $albumId;
    private $albumName;
    private Artist $artist;
    private $dbh;

    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }

    public function __construct (){

            $this->dbh = Database::getInstance();
            $this->dbh = $this->dbh->connect();
    }


}

