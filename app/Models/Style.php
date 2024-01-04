<?php

require_once 'database.php';
class Style {
    private $styleId;
    private $styleName;

    public function __construct() {
        $this->db = DATABASE::getconnection();
    }

    public function __get ($param) {
        return $this->$param;
    }

    public function __set ($param,$value){
        $this->$param = $value;
    }

    public function getallstyles () {
        $get = $this->db->query("SELECT * FROM style");
        $result = $get->fetchALL(PDO::FETCH_ASSOC);
        $styles = [];
        foreach ($result as $row) {
            $Styles = new Style();
            $Styles->__set('styleId',$row['styleId']);
            $Styles->__set('styleName',$row['styleName']);
            $styles [] = $Styles;
        }
        return $styles;
    }
}