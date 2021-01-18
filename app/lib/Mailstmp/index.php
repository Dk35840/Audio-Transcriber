<?php
require 'PHPMailer/PHPMailerAutoload.php';
//somoe data
$user_message = $_POST['user_message'];
$uname = $_POST['uname'];
$email = $_POST['email'];





//main file
$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'cs1402710049@gmail.com';          // SMTP username
$mail->Password = 'password'; // SMTP password to add
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom($email, $uname);
$mail->addReplyTo($email ,$uname);
$mail->addAddress('dk35840@gmail.com');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Hi I am </h1>';
$bodyContent .= $uname;
$bodyContent .= ' from ';
//$bodyContent .= $email;
$bodyContent .= $user_message ;
//$bodyContent .= '<p>Finaly Now I can send mail <b>offline</b></p>';

$mail->Subject = 'Email from transcriber site';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo "<script type='text/javascript'>  
	    alert('Message is sent succesfully');
	   location='../../index.php' ;</script>";
}
?>
