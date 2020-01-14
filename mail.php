<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = "smtp.gmail.com";                       // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sifat01552@gmail.com';                 // SMTP username
    $mail->Password   = 'monipurhighschool';                    // SMTP password
    $mail->SMTPSecure = 'tsl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sifat01552@gmail.com', 'Password');
    $mail->addAddress('muhabullah@northsouth.edu', 'Rifat');     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'PSB Password';
    $mail->Body    = 'Hi, Here is your Password for this ID in <b>Parking Sapce Bangladesh</b>';
    $mail->AltBody = 'Hi, Here is your Password for this ID in Parking Sapce Bangladesh';

    $mail->send();
    echo 'Email has been sent';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>