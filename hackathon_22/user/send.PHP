<?php

use PHPMailer\PHPMalier\PHPMailer;
use PHPMailer\PHPMalier\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
$mail=new PHPMailer(true);

$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username='archizadafiya26@gmail.com';
$mail->Password='hweweqmevpbpdnjw';
$mail->SMTPSecure='ssl';
$mail->Port=465;

$mail->setForm('archizdafiya26@gmail.com');

$mail->addAddress($_POST["email"]);
$mail->isHTML(true);
$mail->Subject =$_POST["subject"];
$mail->Body=$_POST["message"];
$mail->send();
}
?>