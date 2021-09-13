<?php
$name = $_POST['name']
$mail = $_POST['email']
$phone = $_POST['phone']
$message = $_POST['message']

$header = 'From: ' . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "E-mail: " . $email . " \r\n";
$message .= "Teléfono: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date ('d/m/y', time());

$para = 'joc.alejandro.m@gmail.com';
$asunto = 'Cliente Our-Project-Now';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:home.html");
?>