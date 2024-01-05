<?php

namespace Models;
use App\Core\Model;
use App\Core\Database;
class Report extends Model
{
    private $dbh;
    private $reportId;
    private $reportContent;
    private Lyrics $lyrics;

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