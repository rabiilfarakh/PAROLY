<?php

namespace Models;
use App\Core\Model;
use App\Models\Album;
use App\Models\Style;
use App\Core\Database;
class Music extends Model
{
    private $musicId;
    private $musicName;
    private $createdAt;
    private Album $album;
    private $style;
    private $dbh;
    public function __construct()
    {
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