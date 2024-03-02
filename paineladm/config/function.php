<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

include_once  '.\vendor\autoload.php';
require_once  ('conexao.php');
$mailHost = 'smtp.hostinger.com'; 
$mailSMTPAuth = 'true';
$mailUsername = 'envio@codetriad.net';
$mailPassword = 'ugdugwd#53dfS';
$mailSMTPSecure = 'ssl';
$mailPort = '465';
$mailSenderAddress = 'envio@codetriad.net';
$mailSenderName = 'CODE TRIAD';

function envioEmail($sendMailAdress, $sendMailName){
    global $mailHost;
    global $mailSMTPAuth;
    global $mailUsername;
    global $mailPassword;
    global $mailSMTPSecure;
    global $mailPort;
    global $mailSenderAddress;
    global $mailSenderName;
    $corpo_email = "<h1>Senhor. Você tem uma nova solicitação de agendamento</h1><br>
    <br><br>


    <b>CODE TRIAD<b><br>
    Setor Comercial e TI<br>
    27 997859457<rbr><br><br>
    
    
    
    Esta mensagem pode conter informação confidencial, de uso único e exclusivo do destinatário indicado,<br>
    constituindo uma comunicação privilegiada e sigilosa. Se você recebeu esta mensagem por engano,<br>
    ou se não for o destinatário ou a pessoa autorizada a recebê-la, por favor, informe-nos o mais rapidamente possível e a apague, <br>
    inclusive, de sua lixeira de e-mails. Você não deve copiá-la ou usá-la para nenhum propósito ou revelar seu conteúdo a outra pessoa,<br>
    nos termos da Lei nº 13.709/2018 - Lei Geral de Proteção de Dados Pessoais (LGPD).";

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $mailHost;
    $mail->SMTPAuth = $mailSMTPAuth; 
    $mail->Username   = $mailUsername;
    $mail->Password   = $mailPassword;
    $mail->SMTPSecure = $mailSMTPSecure;
    $mail->Port = $mailPort;
    $mail->setFrom($mailSenderAddress, $mailSenderName);
    $mail->addAddress($sendMailAdress , $sendMailName);
    //$mail->addReplayTo('contato@codetriad.net', '');
    $mail->isHTML(true);
    $mail->Subject = 'AGENDAMENTO PENDENTE';
    $mail->Body    = $corpo_email;
    $mail->AltBody = $corpo_email;
    $mail->send();
    $mail->smtpClose();

}



$email = $_SESSION['email'];
$consultaNome  = mysqli_query($mysqli_connection, "SELECT * FROM USUARIO WHERE EMAIL = '$email'");
$retornaNome = mysqli_fetch_assoc($consultaNome);

function nomeBarbeiro(){
    global $retornaNome;
    echo $retornaNome['NOME'];
    return $retornaNome['NOME'];
}

function emailBarbeiro(){
   global $retornaNome;
   echo $retornaNome['EMAIL'];
   return $retornaNome['EMAIL'];
}

function idBarbeiro(){
   global $retornaNome;
   return $retornaNome['ID'];
}

function fotoBarbeiro(){
   global $retornaNome;
   echo $retornaNome['FOTO'];
   return $retornaNome['FOTO'];
}


function diaAtual() {
    $hoje = getdate();         
    switch($hoje["wday"]) {
       case 0:             
          return "Domingo";             
          break;             
       case 1:             
          return "Segunda";             
          break;             
       case 2:             
          return "Terça";             
          break;             
       case 3:             
          return "Quarta";             
          break;             
       case 4:             
          return "Quinta";             
          break;             
       case 5:             
          return "Sexta";             
          break;             
       case 6:             
          return "Sábado";             
          break;         
    }     
}     

function mesAtual() {
    date_default_timezone_set('America/Sao_Paulo');
    $month = date("m");   
    echo $month;
}     

?>