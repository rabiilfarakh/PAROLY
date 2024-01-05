<?php
namespace App\Controllers;
use App\Core\Controller;
use App\Helpers\Functions;
class Upload extends Controller {
    public function index() {
        $Style = $this->model('Style');
        $ALLSTYLES = $Style->getStyles();
        $this->view('Upload/index', $data = ['STYLES' => $ALLSTYLES]);
    }

    public function addmusic() {
        // Retrieve data from the POST request
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//            Functions::dd($_POST);
            $artist = $_POST['artist'] ?? '';
            $album = $_POST['album'] ?? '';
            $songs = $_POST['songs'] ?? [];

            if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $tempName = $_FILES['image']['tmp_name'];
                $imageData = file_get_contents($tempName);
            }

            $Musics = $this->model('Music');
            $Album = $this->model('Album');

            $Album->__set('albumName',$album);
            $Album->__set('albumImage',$imageData);
            $Album->insertAlbum();
            $lastid = $Album->lastInsertedId();


            foreach($songs as $music) {

                $songName = $music['songName'] ?? '';
                $style = $music['style'] ?? '';

                $Musics->__set('songName', $songName);
                $Musics->__set('styleId',$style);
                $Musics->__set('albumId',$lastid);
                $Musics->insertMusic();
            }


            echo "Data received successfully!";
        } else {
            echo "No data received!";
        }
    }

}