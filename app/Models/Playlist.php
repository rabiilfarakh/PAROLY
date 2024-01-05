<?php

namespace App\Models;
use \App\Core\Model;
use App\Models\User;
use App\Core\Database;
class Playlist extends Model
{
    private $playlistId;
    private $playlistName;
    private $createdAt;
    private User $user;
    public function __construct(){
        parent::__construct("playlist");
    }
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }
    public function getAllPlaylists(){
        return $this->getAll();
    }
    public function addplaylist($data){
        $this->add($data);
    }
    public function statistics (){
        return $this->count('playlistId');
    }
}