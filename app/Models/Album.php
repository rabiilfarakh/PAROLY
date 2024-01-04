<?php

class Album {
    private $albumId;
    private $albumName;
    private $artistId;
    private $albumImage;

    private $artistName;
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

    public function Get_ALL_ALbums() {
        $get = $this->db->query('SELECT * FROM album JOIN artist ON artist.artistId = album.artistId');
        $result = $get->fetchAll(PDO::FETCH_ASSOC);
        $albums = [];

        foreach ($result as $row) {
            $album = new Album();
            $album->__set('albumId', $row['albumId']);
            $album->__set('albumName', $row['albumName']);
            $album->__set('artistId', $row['artistId']);

            $album->__set('artistName', $row['artistName']);

            $imageData = base64_encode($row['albumImage']); 
            $album->__set('albumImage', $imageData);

            $albums[] = $album;
        }

        return $albums;
    }


    
}