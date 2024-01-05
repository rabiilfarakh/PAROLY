<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;
use PDOException;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Clients extends Controller
{
    private $dbh;

    public function login()
    {
        $this->view("client/login");

    }

    public function checkLogin(){
        if (isset($_POST['login'])) {
            
            $clientObject = $this->model("client");
            $result = $clientObject->lg($_POST['email'], $_POST['password']);
            if ($result == 0) {
                echo "user not found";
            } else if ($result == 1) {
                
                echo "incorrect password ";
            } else {
                $this->view("client/index");
            }

        }
    }


    public function newPwd()
    {
        $this->view("client/resetPwd");

        if (isset($_POST['confirme'])) {
            $token = $_GET["token"];
            $email = $_GET["email"];
        
            $password = $_POST["password"];
            $tryPassword = $_POST["tryPassword"];
            
            $object = $this->model("client");
            $user = $object->newPwd($email);

            // $stmt = $this->dbh->prepare("SELECT userId , token FROM client WHERE email = ?");
            // $stmt->execute([$email]);
            // $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
        
            if ($user && $user['token'] == $token) {
                if ($password == $tryPassword) {
                    

                    $user = $object->up($password,$user['userId']);

                    // $stmt = $this->db->prepare("UPDATE client SET password = ? WHERE userId = ?");
                    // $stmt->execute([$password, $user['userId']]);

                    header('location:http://localhost/PAROLY/public/clients/login');
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
        
        $this->view("client/forgotPwd");

        require 'C:/laragon/www/PHPMailer/src/Exception.php';
        require 'C:/laragon/www/PHPMailer/src/PHPMailer.php';
        require 'C:/laragon/www/PHPMailer/src/SMTP.php';

        if (isset($_POST['reset'])) {
            $email = $_POST["email"];
            
            $object = $this->model("client");
            $user = $object->newPwd($email);
            // $stmt = $this->db->prepare("SELECT userId FROM client WHERE email = ?");
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
                    $mail->Body = "cliquer sur le lien pour modifier votre mot de passe : http://localhost/PAROLY/public/clients/newPwd?email=$email&token=$code";
                    
                    // $mail->SMTPDebug = 2;

                    $mail->send();
                    $user = $object->upT($code,$user['userId']);
                    // $stmt = $this->db->prepare("UPDATE client SET token = ? WHERE userId = ?");
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

