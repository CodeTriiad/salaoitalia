<?php
include 'tempoSession.php';
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('../../index.html');
  }

$logado = $_SESSION['logged_in'];
?>