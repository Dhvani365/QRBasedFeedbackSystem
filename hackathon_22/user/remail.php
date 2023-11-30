<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$email=$_SESSION['email'];
echo $email;

 $con=mysqli_connect('localhost','root','');
    $db=mysqli_select_db($con,'hackathon');
    
    $qry1="Select * from user_OTP1 where email='$email'";
    $result=mysqli_query($con,$qry1);

    $otp= mt_rand(100000,999999);
 

$mail = new PHPMailer(true);

try {
 
                  
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'zeelpbarot@gmail.com';                    
    $mail->Password   = 'onmoqhlmgpkspzpb';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

  
    $mail->setFrom('zeelpbarot@gmail.com', 'Zeel Barot');

    $mail->addAddress($email);             


    $mail->isHTML(true);                                 
    $mail->Subject = 'OTP for Login';
    $mail->Body    = '<b>'.$otp.'</b> is your OTP to login to get FEEDBACK FORM. DO NOT share with anyone.
    FEEDBACK FOR GUJRAT POLICE never calls to ask for OTP.';
    $mail->AltBody = $otp;

    $mail->send();
    echo 'Message has been sent successfully..!';
    header("location:OTP.html");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
if(mysqli_num_rows($result)>0)
    {
        $qry2="Update user_OTP1 set OTP = $otp where email='$email'";
        mysqli_query($con,$qry2);
    }
    else
    {
        $qry2="insert into user_OTP1(email,OTP) values('$email',$otp)";
        mysqli_query($con,$qry2); 
    }




?>