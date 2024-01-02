<?php

namespace Models;
use App\Core\Model;
class Report extends Model
{
    private $reportId;
    private $reportContent;
    private Lyrics $lyrics;
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }
}