<?php

namespace App\Models;
use App\Models\Artist;
use App\Core\Model;
use App\Core\Database;
use PDO;
class Album
{
    private $albumId;
    private $albumName;
    private $artistId;
    private $albumImage;

    private $artistName;

    private $SONGSCOUNT;
    private $db;

    public function __construct(){
        $this->db = Database::getInstance();
        $this->db = $this->db->connect();
    }
    public function __get($param)
    {
        return $this->$param;
    }

    public function __set($param, $value)
    {
        $this->$param = $value;
    }

    public function insertAlbum()
    {
        $album = $this->albumName;
        $image = $this->albumImage;
        $insert = $this->db->prepare("INSERT INTO album (albumName,albumImage) VALUES (:name,:image)");
        $insert->bindValue(':name', $album, PDO::PARAM_STR);
        $insert->bindValue(':image', $image, PDO::PARAM_LOB);
        $insert->execute();
    }

    public function lastInsertedId()
    {
        return $this->db->lastInsertId();
    }

    public function Get_ALL_ALbums()
    {
        $get = $this->db->query('SELECT album.*,artist.username, COUNT(music.songId) AS SONGSCOUNT
        FROM album
        JOIN artist ON artist.userId = album.artistId
        JOIN music ON music.albumId = album.albumId
        GROUP BY album.albumId;');
        $result = $get->fetchAll(PDO::FETCH_ASSOC);
        $albums = [];

        foreach ($result as $row) {
            $album = new Album();
            $album->__set('albumId', $row['albumId']);

            $album->__set('albumName', $row['albumName']);
            $album->__set('artistId', $row['artistId']);

            $album->__set('artistName', $row['username']);

            $album->__set('SONGSCOUNT', $row['SONGSCOUNT']);

            $imageData = base64_encode($row['albumImage']);
            $album->__set('albumImage', $imageData);

            $albums[] = $album;
        }

        return $albums;
    }


}