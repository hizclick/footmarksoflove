<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//From email address and name
$mail->From = "hizclick@gmail.com";
$mail->FromName = "Full Name";

//To address and name
$mail->addAddress("hizclick@gmail.com", "Recepient Name");
$mail->addAddress("hizclick@gmail.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("hizclick@gmail.com", "Reply");


//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
