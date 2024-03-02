<?php
      include_once('../conexao.php');
    // ========== LOGIN USERS ==========
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    if(isset($_POST['login'])){
            $query = mysqli_query($mysqli_connection, "SELECT * FROM USUARIO WHERE EMAIL = '$email' AND  SENHA = '$senha'");
            $row = mysqli_num_rows($query);
            if (mysqli_num_rows($query)<=0){
                unset ($_SESSION['email']);
                unset ($_SESSION['senha']);
                  echo"<script language='javascript' type='text/javascript'>
                  alert('Login e/ou senha incorretos');window.location
                  .href='../../index.html';</script>";
                  die();
              }else{
                $_SESSION['user_id'] = $row['ID'];
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                $_SESSION['logged_in'] = true;
                  echo"<script language='javascript' type='text/javascript'>
                  alert('Login correto');</script>";
                  header("Location:../../administracao.php");
                }
            /*if($row == 1){
                if($row['SENHA'] == $login_password){
                    $_SESSION['username'] = $row['USUARIO'];
                    $_SESSION['user_id'] = $row['ID_LOGIN'];
                    $_SESSION['email'] = $row['EMAIL'];
                    $_SESSION['logged_in'] = true;
 
                    header("location:../home.php");
                }else{
                    echo "<script>alert('Senha errada... tente novamente!!); window.location='../index.php';</script>";
                }
            }*/

    }
    ?>