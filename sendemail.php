<?php

$email = $_POST["email"];
$message =$_POST["message"];
$name= $_POST["name"];

require("lib/PHPMailerAutoload.php");

$mail = new PHPMailer();

$mail->setFrom($email, $name );

$mail->AddAddress("info@teamkrishna.in", "TeamKrishna");

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = "You have a message! [".$_POST["subject"]+" ]";


$mail->Body    = $message;
$mail->AltBody = $message;

$mail->Send();

?>