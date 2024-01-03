<?php

class ArtistModel {
    private $name;
    private $email;
    private $password;


    public function __get($parametre){
        return $this->$parametre;
    }

    public function __set($parametre, $value){
        $this->$parametre = $value;
    }

}