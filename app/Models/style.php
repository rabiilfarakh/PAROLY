<?php

namespace Models;
use  App\Core\Model;
class style extends Model
{
    private $styleId;
    private $styleName;
    
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }
}
