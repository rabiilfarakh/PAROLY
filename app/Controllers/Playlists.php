<?php
namespace App\Controllers;
session_start();
use App\Core\Controller;
use App\Helpers\Functions;
use App\Models\Playlist;
use App\Helpers\InputsManager as Validator;

class Playlists extends Controller{
    public function index()
    {
        $data = [$this->statistics(),
            $this->getPlaylists(),
            $this->getStyles()
            ];
        $this->view("Admin/dashboard", $data);
    }
    public function addPlaylist(){
        $playlist = $this->model("Playlist");
        $this->view("admin/addPlaylist");
        if(isset($_POST['addplaylist'])){
            unset($_POST['addplaylist']);
            $_POST['userId'] = $_SESSION["user"]["userId"];
            $playlistInfo = Validator::playlistInfo($_POST, $_FILES["playlistImage"]);
            $playlist->addPlaylist($playlistInfo);
        }
    }
    public function statistics(){
        $object = $this->model("playlist");
        return $object->statistics();
    }
    public function getPlaylists(){
        $object = $this->model("playlist");
        return $object->getAllPlaylists();
    }
    public function getStyles(){
        $object = $this->model("Style");
        return $object->getStyles();
    }
}