<?php
// database Connection
$hostname = "localhost";
$username = "u956686723_homolog_barber";
$password = "oN~9wUEH/";
$db =  "u956686723_homolog_barber";
$mysqli_connection = new mysqli($hostname,$username,$password,$db);
if($mysqli_connection->connect_error){
die("connection error".$mysqli_connection->connect_error);
}
error_reporting('1');
?>


<?php

/*session_start();
// database Connection
$hostname = "localhost";
$username = "root";
$password = "";
$db =  "Barbearia";
$mysqli_connection = new mysqli($hostname,$username,$password,$db);
if($mysqli_connection->connect_error){
die("connection error".$mysqli_connection->connect_error);
}
error_reporting('1');*/

?>

