<?php
require 'PHPMailer/PHPMailerAutoload.php';
//somoe data



 $uname= $_COOKIE["name"]; 
        $email=$_COOKIE["email"];


//main file
$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'cs1402710049@gmail.com';          // SMTP username
$mail->Password = '7275167656'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('transcriber.net', 'Admin');
$mail->addReplyTo('dk35840@gmail.com' ,'dhananjay');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Hi Hello </h1>';
$bodyContent .= $uname;
$bodyContent .= ' I am from transcribernet .We will sure review your transcriber data and we will soon mail you ';
//$bodyContent .= $email;
$bodyContent .= 'Kindly have a pattience and suscriber our mailing list for more info' ;
//$bodyContent .= '<p>Finaly Now I can send mail <b>offline</b></p>';

$mail->Subject = 'Email from transcriber site';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo "<script type='text/javascript'>  
	    alert('Please suscribe us');
	   location='../../index.php' ;</script>";
}
?>
