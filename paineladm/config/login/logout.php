<?php
session_start();
$token = md5(session_id());
session_destroy();
header('location:../../index');

if(isset($_POST['logout'])){
   if(isset($_GET['token']) && $_GET['token'] === $token && isset($_SESSION['logged_in'])) {
      // limpe tudo que for necessário na saída.
      // Eu geralmente não destruo a seção, mas invalido os dados da mesma
      // para evitar algum "necromancer" recuperar dados. Mas simplifiquemos:
      session_destroy();
      header('location:../../index');
      exit();
   }
}
?>