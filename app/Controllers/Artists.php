<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Artists extends Controller
{

    public function login()
    {
        $this->view("artist/login");

    }

    public function checkLogin(){
        if (isset($_POST['login'])) {
            
            $artistObject = $this->model("artist");
            $result = $artistObject->lg($_POST['email'], $_POST['password']);
            if ($result == 0) {
                echo "user not found";
            } else if ($result == 1) {
                
                echo "incorrect password ";
            } else {
                $this->view("artist/index");
            }

        }
    }

    public function newPwd()
    {
        $this->view("artist/resetPwd");

        if (isset($_POST['confirme'])) {
            $token = $_GET["token"];
            $email = $_GET["email"];
        
            $password = $_POST["password"];
            $tryPassword = $_POST["tryPassword"];
            
            $object = $this->model("Artist");
            $user = $object->newPwd($email);

            // $stmt = $this->dbh->prepare("SELECT userId , token FROM artist WHERE email = ?");
            // $stmt->execute([$email]);
            // $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
        
            if ($user && $user['token'] == $token) {
                if ($password == $tryPassword) {
                    

                    $user = $object->up($password,$user['userId']);

                    // $stmt = $this->db->prepare("UPDATE artist SET password = ? WHERE userId = ?");
                    // $stmt->execute([$password, $user['userId']]);

                    header('location:http://localhost/PAROLY/public/artists/login');
                    exit();
                } else {
                    echo "Les mots de passe ne correspondent pas.";
                }
            } else {
                echo "Erreur de vérification du code de récupération.";
            }
        }

    }

    public function forgotPwd(){
        
        $this->view("artist/forgotPwd");

        require 'C:/laragon/www/PHPMailer/src/Exception.php';
        require 'C:/laragon/www/PHPMailer/src/PHPMailer.php';
        require 'C:/laragon/www/PHPMailer/src/SMTP.php';

        if (isset($_POST['reset'])) {
            $email = $_POST["email"];

            $object = $this->model("Artist");
            $user = $object->newPwd($email);
            // $stmt = $this->db->prepare("SELECT userId FROM artist WHERE email = ?");
            // $stmt->execute([$email]);
            // $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $code = uniqid();

                try {
                    $mail = new PHPMailer(true);
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'rabiilfarakh2816@gmail.com';
                    $mail->Password = 'ldsc nldc back sgkr';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;
                    $mail->setFrom('rabiilfarakh2816@gmail.com');
                    $mail->addAddress($email);
                    $mail->isHTML(false);
                    $mail->Subject = 'Code de récupération de mot de passe';
                    $mail->Body = "cliquer sur le lien pour modifier votre mot de passe : http://localhost/PAROLY/public/artists/newPwd?email=$email&token=$code";
                    
                    // $mail->SMTPDebug = 2;

                    $mail->send();
                    $user = $object->upT($code,$user['userId']);
                    // $stmt = $this->db->prepare("UPDATE artist SET token = ? WHERE userId = ?");
                    // $stmt->execute([$code, $user['userId']]);

                    echo "Un code de récupération a été envoyé à votre adresse e-mail.";
                } catch (Exception $e) {
                    echo "Erreur lors de l'envoi du courrier : {$mail->ErrorInfo}";
                }
            } else {
                echo "Aucun utilisateur trouvé avec cette adresse e-mail.";
            }
        }

    }
}
