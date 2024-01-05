<?php

class Artist extends Controller {
    public function index () {
        $Musics = $this->model('Music');
        $ALLSONGS = $Musics->Get_All_Songs();
        $Albums =$this->model('Album');
        $ALLALBUMS = $Albums->Get_ALL_ALbums();
        
        $this->view('Artist/index',$data = ['Musics'=>$ALLSONGS , 'Albums' =>$ALLALBUMS]);
    }

    public function addmusic () {
       if(isset($_POST['sent'])) {
        var_dump($_POST);
       }
    }

} 
