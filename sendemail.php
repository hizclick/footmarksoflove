<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$mail = new PHPMailer();
$mail->setFrom('hizclick@gmail.com', 'First Last');
$mail->addAddress('hizclick@gmail.com', 'John Doe');
$mail->Subject = 'Say Hello to HELO';
$mail->Body = '<h1>Hi!</h1><p>This is my HTML body</p>'
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>
