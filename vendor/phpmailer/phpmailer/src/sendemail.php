<?php
// Importar as classes  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// Carregar o autoloader do composer
require '../../../../vendor/autoload.php';


//$email = $_SESSION['email'];

$mail = new PHPMailer(true);

    // Configurações do servidor
    $mail->isSMTP();        //Devine o uso de SMTP no envio
    $mail->SMTPDebug = 2;
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username   = 'envio@codetriad.net';
    $mail->Password   = 'ugdugwd#53dfS';
    // Criptografia do envio SSL também é aceito
    $mail->SMTPSecure = 'ssl';
    // Informações específicadas pelo Google
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 465;
    // Define o remetente
    $mail->setFrom('envio@codetriad.net', 'CODE TRIAD');
    // Define o destinatário
    $mail->addAddress('efiasn@gmail.com' , 'CLIENTE');
    //$mail->addReplayTo('efiasn@gmail.com', 'Destinatário');
    // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = 'teste';
    $mail->Body    = 'teste';
    $mail->AltBody = '$corpo_email_sem_html';
    if($mail->send()){
    echo 'A mensagem foi enviada!';
    }else{
        echo "Não enviada;";
    }
    $mail->smtpClose();
