<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "phpmailer/PHPMailer.php";
require "phpmailer/SMTP.php";
require "phpmailer/Exception.php";

$error_msg=null;
$success_msg=null;

if ($_POST) {
    $name = isset($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_STRING) : null;
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
    $message = htmlspecialchars($_POST['message']);

    //$name = $_POST['name'];
    //$email = $_POST['email'];
    //$message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        $error_msg = 'Fill out required entry fields!';
    }

    if (is_null($error_msg)) {

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "konradstep23@gmail.com";
        $mail->Password = "";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;

        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("konradstep23@gmail.com");
        $mail->Subject = "Nowa wiadomość z formularza kontaktowego";
        $mail->Body = $message;

        if($mail->send())
            $success_msg = "Message sent.";
        else
        {
            $error_msg = 'Failed to send! '. $mail->ErrorInfo;
        }
    }
}
?>