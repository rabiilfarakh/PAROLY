<?php

namespace Models;
use  App\Core\Model;
use \Models\Lyrics;
class Reaction extends Model
{
    private $reactionId;
    private $reactionStatus;
    private Lyrics $lyrics;
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }
}