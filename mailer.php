<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__."/vendor/autoload.php";

$mail=new PHPMailer(true);

// $mail->SMTPDebug=SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth=true;

$mail->Host='smtp.gmail.com';//the smtp server
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use STARTTLS for encryption
$mail->Port=587;
$mail->Username="vanessarosepaul7@gmail.com";

$mail->isHTML(true);
return $mail;

?>

