<?php //1 � Definimos Para quem vai ser enviado o email 
$para = "programacaomoc@gmail.com"; 
//2 - resgatar o nome digitado no formul�rio e grava na variavel $nome 
$nome = $_POST['nome']; 
// 3 - resgatar o assunto digitado no formul�rio e grava na variavel //$assunto 
$assunto = $_POST['assunto']; 
	//4 � Agora definimos a mensagem que vai ser enviado no e-mail 
	$mensagem = "<strong>Nome: </strong>".$nome; 
	$mensagem .= "<br> <strong>Mensagem: </strong>".$_POST['mensagem']; 
	//5 � agora inserimos as codifica��es corretas e tudo mais. 
	$headers = "Content-Type:text/html; charset=UTF-8\n"; 
	$headers .= "From: dominio.com.br<programacaomoc@gmail.com>\n"; //Vai ser //mostrado que o email partiu deste email e seguido do nome 
	$headers .= "X-Sender: <programacaomoc@gmail.com>\n";
	//email do servidor //que enviou $headers .= "X-Mailer: PHP v".phpversion()."\n"; 
	$headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n"; 
	$headers .= "Return-Path: <programacaomoc@gmail.com>\n"; //caso a msg //seja respondida vai para este email. 
	$headers .= "MIME-Version: 1.0\n"; 
	
	mail($para, $assunto, $mensagem, $headers); //fun��o que faz o envio do email. 
	?> 
