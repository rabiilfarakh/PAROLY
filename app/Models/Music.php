<?php

namespace App\Models;
use App\Core\Model;
use App\Models\Album;
use App\Models\Style;
use App\Core\Database;
use PDO;
class Music
{
    private $songId;
    private $songName;
    private $createAt;
    private $albumId;
    private $styleId;
    private $albumName;
    private $artistName;

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

    public function Get_All_Songs()
    {
        $songs = [];

        $get = $this->db->query('SELECT * FROM music JOIN album ON album.albumId = music.albumId JOIN artist on artist.userId = album.artistId;');
        $songsData = $get->fetchAll(PDO::FETCH_ASSOC);

        foreach ($songsData as $song) {
            $music = new Music();
            $music->__set('songId', $song['songId']);
            $music->__set('songName', $song['songName']);
            $music->__set('createAt', $song['createAt']);
            $music->__set('albumId', $song['albumId']);
            $music->__set('styleId', $song['styleId']);
            $music->__set('artistName' ,$song['username']);
            $music->__set('albumName',$song['albumName']);
            $songs[] = $music;
        }

        return $songs;
    }


    public function insertMusic()
    {
        $song = $this->songName;
        $id = $this->albumId;
        $style = $this->styleId;
        $insert = $this->db->prepare('INSERT INTO music (songName,albumId,styleId) VALUE (:songName,:id,:style)');
        $insert->bindValue(':songName', $song, PDO::PARAM_STR);
        $insert->bindValue(':id', $id, PDO::PARAM_INT);
        $insert->bindValue(':style', $style, PDO::PARAM_INT);
        $insert->execute();
    }


    public function GEt_Music_By_Album()
    {
        $albumid = $this->albumId;
        $get = $this->db->prepare('SELECT * FROM music WHERE albumId = :id');
        $get->bindValue(':id', $albumid, PDO::PARAM_INT);
        $get->execute();
        $result = $get->fetchAll(PDO::FETCH_ASSOC);
        $songs = [];
        foreach ($result as $row) {
            $music = new Music();
            $music->__set('songId', $row['songId']);
            $music->__set('songName', $row['songName']);
            $music->__set('createAt', $row['createAt']);
            $music->__set('albumId', $row['albumId']);
            $music->__set('styleId', $row['styleId']);

            $songs[] = $music;
        }
        return $songs;
    }
}