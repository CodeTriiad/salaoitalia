<?php
include 'tempoSession.php';
session_start();
if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:https://salaoitalia.codetriad.net/paineladm/index') ;
  }
$logado = $_SESSION['logged_in'];

$email = $_SESSION['email'];
?>