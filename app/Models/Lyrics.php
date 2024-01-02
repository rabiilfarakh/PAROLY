<?php

namespace Models;
use App\Models\Client;
use App\Models\Music;
use App\Core\Model;
class Lyrics extends Model
{
    private $lyricsId;
    private $lyricsContent;
    private Music $music;
    private Client $client;
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }
}