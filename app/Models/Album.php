<?php

class Album {
    private $albumId;
    private $albumName;
    private $artistId;
    private $albumImage;

    private $db;

    public function __construct() {
        $this->db = DATABASE::getconnection();
    }

    public function __get ($param) {
        return $this->$param;
    }

    public function __set($param,$value){
        $this->$param = $value;
    }

    public function insertAlbum() {
        $album = $this->albumName;
        $image = $this->albumImage;
        $insert = $this->db->prepare("INSERT INTO album (albumName,albumImage) VALUES (:name,:image)");
        $insert->bindValue(':name' , $album , PDO::PARAM_STR);
        $insert->bindValue(':image' , $image , PDO::PARAM_LOB);
        $insert->execute();
    }

    public function lastInsertedId() {
        return $this->db->lastInsertId();
    }
    
}