<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'programacaomoc@gmail.com';            // SMTP username
$mail->Password = 'programacao';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'programacaomoc@gmail.com';
$mail->FromName = 'Mailer';
$mail->addAddress('avuldarte@gmail.com', 'Alex Programador');  // Email do destinatario
$mail->addAddress('kennedimalheiros@gmail.com');               // Name is optional
$mail->addReplyTo('programacaomoc@gmail.com', 'Responder'); //Email de resposta
$mail->addCC('kennedi.malheiros@atsinformatica.com.br');
$mail->addBCC('kennedi.malheiros@atsinformatica.com.br');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'Loja ATS <b>Esta Funcionando \º/!</b>';
$mail->AltBody = 'Loja ATS Esta Funcionando sem HTML!';

if(!$mail->send()) {
   echo 'Mensagem não pôde ser enviada.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Mensagem enviada com sucesso!';