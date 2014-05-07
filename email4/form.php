<?php
require 'PHPMailerAutoload.php';

$EmailDestino = $_GET['email' ];


$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'programacaomoc@gmail.com';            // SMTP username
$mail->Password = 'programacao';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'programacaomoc@gmail.com'; //Email de quem esta enviando
$mail->FromName = 'Loja ATS';  //Nome de quem esta enviando
$mail->addAddress($EmailDestino, 'Kennedi Malheiros');  // Email do destinatario, Name é opcional
//$mail->addAddress('kennedimalheiros@gmail.com', 'Kennedi Malheiros');  // Email do destinatario, Name é opcional
//$mail->addAddress('kennedimalheiros@gmail.com');               // Outro destinatario, Name é opcional
$mail->addReplyTo('programacaomoc@gmail.com', 'Responder');    //Email de resposta
//$mail->addCC('kennedi.malheiros@atsinformatica.com.br');       
//$mail->addBCC('kennedi.malheiros@atsinformatica.com.br');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Titulo do Email';  //Titulo do email
$mail->Body    = 'Loja ATS <b>Esta Funcionando \º/!</b>'; //Conteudo do Email com HTML
$mail->AltBody = 'Loja ATS Esta Funcionando sem HTML!';   //Conteudo do Email sem HTML

if(!$mail->send()) {
   echo 'Mensagem não pôde ser enviada.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Mensagem enviada com sucesso!';