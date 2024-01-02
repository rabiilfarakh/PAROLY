<?php

namespace Models;
use \App\Core\Model;
use App\Models\User;
class Playlist extends Model
{
    private $playlistId;
    private $playlistName;
    private $createdAt;
    private User $user;
    public function __set($property, $value){
        $this->$property = $value;
    }
    public function __get ($property){
        return $this->$property;
    }
}