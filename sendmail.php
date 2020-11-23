<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';
require './vendor/phpmailer/phpmailer/src/Exception.php';

//$status = 'Waiting to send';
//Send Mail Function
if (isset($_POST['submit'])) {
//define variables
   $sender = $_POST['fname'] . " " . $_POST['lname'];
   $email  = $_POST['email'];
   $body   = $_POST['body'];
//initiate PHPMailer
    $mail = new PHPMailer();
//Server Settings
    $mail->SMTPDebug    = 3;
    $mail->isSMTP();
    $mail->Host         = "mail.biaambiental.mx";
    $mail->SMTPAuth     = true;
    $mail->Username     = "bia.mailer@biaambiental.mx";
    $mail->Password     = "b!@adm1N";
    $mail->SMTPSecure   = 'ssl';
    $mail->Port         = 465;
//Headers
    $mail->setFrom('bia.mailer@biaambiental.mx', $sender);
    $mail->AddAddress($email);
//    $mail->AddReplyTo("noreply@biaambiental.mx");
//Message Info
    $mail->Subject  = "BIA | Mailer: " . $sender;
    $mail->Body     = "\nContacto: "  . $sender . " " .  "\nEmail: " . $email . "\nAsunto: " . $body;
    $mail->Altbody  = "\nContacto: "  . $sender . " " .  "\nEmail: " . $email . "\nAsunto: " . $body;
    //Check if succesful
if (!$mail->send()){
    $status = $mail->ErrorInfo;
} else {
    $mail->smtpClose();
    $status = 'Message Sent';
}
}
