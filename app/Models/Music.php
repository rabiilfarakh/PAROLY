<?php

namespace Models;
use App\Core\Model;
use App\Models\Album;
use App\Models\Style;
class Music extends Model
{
    private $musicId;
    private $musicName;
    private $createdAt;
    private Album $album;
    private Style $style;
    public function __construct(){
        parent::__construct("music");
    }
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }
    public function getMusic (){
        return $this->getAll();
    }

}