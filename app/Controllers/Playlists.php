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
//        Functions ::dd($this->statistics());
        $this->view("Admin/dashboard", $data);
    }
    public function addPlaylist(){
        ob_start();
        $playlist = $this->model("Playlist");
        $this->view("admin/addPlaylist");
        if(isset($_POST['addplaylist'])){
            unset($_POST['addplaylist']);
            $_POST['userId'] = $_SESSION["user"]["userId"];
            $playlistInfo = Validator::playlistInfo($_POST, $_FILES["playlistImage"]);
            $playlist->addPlaylist($playlistInfo);
            header("Location: " . APP_URL . "public/Playlists");
        }
    }
    public function statistics(){
        $object = $this->model("playlist");
        $playlistCount = $object->statistics();
        $object = $this->model("style");
        $styleCount = $object->statistics();
        $object = $this->model("Artist");
        $artistCount = $object->statistics();
        $object = $this->model("client");
        $clientCount = $object->statistics();
        return ["playlistCount" => $playlistCount[0],
            "styleCount" => $styleCount[0],
            "artistCount" => $artistCount[0],
            "clientCount" => $clientCount[0]
        ];
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