<?php
include_once('../conexao.php');
include_once('../function.php');
include_once('../session/session.php');
session_start();

$senha = md5($_POST['senha']);
$senhaRepetida = md5($_POST['senhaRepetida']);

if(isset($_POST['alterarSenha'])){
    if ($senha === $senhaRepetida){
        $senhaNova = $senha;
        $email = $_SESSION['email'];
            $consulta = "UPDATE USUARIO 
            SET SENHA = '$senhaNova' 
            WHERE EMAIL = '$email'";
            mysqli_query($mysqli_connection, $consulta);
            header('location:../../perfilalterado');
    } else {
        header('location:../../perfilfailed');
    }
}



?>