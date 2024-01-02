<?php

namespace App\Models;
use App\Models\Artist;
use App\Core\Model;

class Album extends Model
{
    private $albumId;
    private $albumName;
    private Artist $artist;
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }

}