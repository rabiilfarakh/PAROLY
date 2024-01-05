<?php

class ArtistModel {
    private $artistId;
    private $artistName;
    private $artistEmail;

    private $artistPwd;


    public function __get($parametre){
        return $this->$parametre;
    }

    public function __set($parametre, $value){
        $this->$parametre = $value;
    }

    public function Get_All_From_Artist () {
        $get = $this->db->query('SELECT * FROM artist');

    }


}