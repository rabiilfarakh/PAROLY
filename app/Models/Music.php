<?php
require_once 'database.php';
class Music {
    private $songId;
    private $songName;
    private $createAt;
    private $albumId;
    private $styleId;

    private $db;

    public function __construct() {
        $this->db=DATABASE::getconnection();
    }

    public function __get($param) {
        return $this->$param;
    }

    public function __set($param,$value){
        $this->$param = $value;
    }

    public function Get_All_Songs() {
        $songs = [];
        
        $get = $this->db->query('SELECT * FROM music');
        $songsData = $get->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($songsData as $song) {
            $music = new Music();
            $music->__set('songId',$song['songId']);
            $music->__set('songName',$song['songName']);
            $music->__set('createAt',$song['createAt']);
            $music->__set('albumId',$song['albumId']);
            $music->__set('styleId',$song['styleId']);           
            $songs[] = $music;
        }
        
        return $songs;
    }


    public function insertMusic () {
        $song = $this->songName;
        $id = $this->albumId;
        $insert = $this->db->prepare('INSERT INTO music (songName,albumId) VALUE (:songName,:id)');
        $insert->bindValue(':songName' , $song,PDO::PARAM_STR);
        $insert->bindValue(':id' , $id , PDO::PARAM_INT);
        $insert->execute();
    }
}