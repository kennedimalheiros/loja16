/*apenas dispara o envio da mensagem caso houver/existir $_POST['enviar']*/
if (isset($_POST['enviar']))
{
/* 
/* $destinatarios = 'email-para-receber-formulario@seu-dominio';

/* $nomeDestinatario = 'Nome do destinatário';

/* $usuario = 'usuario@seu-dominio';

/* $senha = 'senha';


/*abaixo as veriaveis principais, que devem conter em seu formulario*/
$nomeRemetente = $_POST['nomeRemetente'];
$assunto = $_POST['assunto'];
$_POST['mensagem'] = nl2br('E-mail: '. $_POST['email'] ."

". $_POST['mensagem']);


/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/

include_once("class.phpmailer.php");

$To = $destinatarios;
$Subject = $assunto;
$Message = $_POST['mensagem'];

$Host = 'smtp.'.substr(strstr($usuario, '@'), 1);
$Username = $usuario;
$Password = $senha;
$Port = "587";

$mail = new PHPMailer();
$body = $Message;
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = $Host; // SMTP server
$mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Port = $Port; // set the SMTP port for the service server
$mail->Username = $Username; // account username
$mail->Password = $Password; // account password

$mail->SetFrom($usuario, $nomeDestinatario);
$mail->Subject = $Subject;
$mail->MsgHTML($body);
$mail->AddAddress($To, "");

if(!$mail->Send()) {
$mensagemRetorno = 'Erro ao enviar e-mail: '. print($mail->ErrorInfo);
} else {
$mensagemRetorno = 'E-mail enviado com sucesso!';
}
}
?>