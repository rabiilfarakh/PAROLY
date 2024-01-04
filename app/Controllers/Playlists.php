<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Helpers\Functions;
use App\Models\Playlist;
use App\Helpers\InputsManager as Validator;


class Playlists extends Controller{
    public function addPlaylist(){
        $playlist = $this->model("Playlist");
        $this->view("admin/addPlaylist");
        if(isset($_POST['addplaylist'])){
            unset($_POST['addplaylist']);
            $playlistInfo = Validator::playlistInfo($_POST, $_FILES["playlistImage"]);
            $playlist->addPlaylist($playlistInfo);
        }
    }
}