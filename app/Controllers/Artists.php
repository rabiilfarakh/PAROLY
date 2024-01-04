<?php

namespace App\Controllers;
use App\Core\Controller;
use PDO;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Artists extends Controller
{

    private $db;

    public function login()
    {
        $this->view("Authentication/login");
        if (isset($_POST['submit'])) {
            $clientObject = $this->model("Artist");

            $result = $clientObject->Login($_POST['username'], $_POST['password']);
            if ($result == 0) {
                echo "user not found";
            } else if ($result == 1) {
                echo "incorrect password ";
            } else {
                print_r($result);
            }

        }
    }



    public function newPwd()
    {
        $this->view("Authentication/newPwd");

        if (isset($_POST['newPwd'])) {
            $token = $_GET["token"];
            $email = $_GET["email"];
        
            $password = $_POST["password"];
            $tryPassword = $_POST["tryPassword"];
        
            $stmt = $this->db->prepare("SELECT userId , token FROM artist WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if ($user && $user['token'] == $token) {
                if ($password == $tryPassword) {
                    $stmt = $this->db->prepare("UPDATE artist SET password = ? WHERE userId = ?");
                    $stmt->execute([$password, $user['userId']]);
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
        
        $this->view("Authentication/forgotPwd");

        require 'C:/laragon/www/PHPMailer/src/Exception.php';
        require 'C:/laragon/www/PHPMailer/src/PHPMailer.php';
        require 'C:/laragon/www/PHPMailer/src/SMTP.php';

        if (isset($_POST['reset'])) {
            $email = $_POST["email"];

            $stmt = $this->db->prepare("SELECT userId FROM artist WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

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

                    $stmt = $this->db->prepare("UPDATE artist SET token = ? WHERE userId = ?");
                    $stmt->execute([$code, $user['userId']]);

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