<?php
/*include '../config/conexao.php';
 //========== SIGNUP USERS ==========

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $funcao = $_POST['funcao'];
 
    if(isset($_POST['registrar'])){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($senha){
                $select = "SELECT * FROM LOGIN WHERE EMAIL = '$email'";
                $query = mysqli_query($conn, $select);
                $row = mysqli_fetch_assoc($query);
                if(!$row){
                    $insert = "INSERT INTO LOGIN(ID_LOGIN, NOME, SOBRENOME, FUNCAO, EMAIL, SENHA, STATUS, CRIADO, ATUALIZADO) 
                    VALUES (null,'$nome', '$sobrenome', '$funcao', '$email', md5($senha), 1 ,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
                    $query = mysqli_query($conn,$insert);
                    if($query){
                        echo "<script>alert('Sua conta foi criada com sucesso!!'); window.location='listaUsuario.php';</script>";  
                    }else{
                        echo "<script>alert('Algo deu errado... tente novamente!!'); window.location='criarUsuario.php';</script>";  
                    }
                }else{
                    echo "<script>alert('O usuário já existe... tente novamente!!'); window.location='criarUsuario.php';</script>";  
                }
 
            }else{
                echo "<script>alert('Senha e Confirmar senha não coincidem... tente novamente!!'); window.location='criarUsuario.php';</script>";  
            }
        }else{
            echo "<script>alert('E-mail inválido...Insira um e-mail válido!!'); window.location='criarUsuario.php';</script>";
        }
    }*/
?>