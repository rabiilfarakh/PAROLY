<?php

namespace App\Models;
use App\Helpers\Functions;
use  App\Core\Model;
class Style extends Model
{
    private $styleId;
    private $styleName;
    public function __construct(){
        parent::__construct("style");
    }
    
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }

    public function addStyle($data){
        Functions::dd($data);
        $this->add($data);
    }
}
