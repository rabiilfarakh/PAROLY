<?php

class Artist extends Controller {
    public function index () {
        $Musics = $this->model('Music');
        $ALLSONGS = $Musics->Get_All_Songs();
        $this->view('Artist/index',['Musics'=>$ALLSONGS]);
    }

    public function addmusic () {
       if(isset($_POST['sent'])) {
        var_dump($_POST);
       }
    }

} 
