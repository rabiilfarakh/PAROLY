<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;
use PDOException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class MusicController extends Controller {

    public function getmusicforalbum () {
        if(isset($_POST['albumid'])){
            $i = 1;
            $Music = $this->model('Music');
            $Music->__set('albumId',$_POST['albumid']); 
            $songs = $Music->GEt_Music_By_Album();
            foreach($songs as $song) {
                ?>
                <tr class="sg">
                <th scope="row"><?php echo $i?></th>
                <td><?php echo $song->__get('songName')?></td>
                <td><?php echo $song->__get('createAt')?></td>
                <td>0</td>
                <td>0</td>
                </tr>
                <?php
                $i++;
            }
        }
    }
}