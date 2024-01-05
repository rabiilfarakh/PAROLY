<?php

namespace Models;
use App\Models\Client;
use App\Models\Music;
use App\Core\Model;
use App\Core\Database;
class Lyrics extends Model
{
    private $lyricsId;
    private $lyricsContent;
    private $music;
    private $client;
    private $dbh;

    public function __construct(){
        parent::__construct("client");
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