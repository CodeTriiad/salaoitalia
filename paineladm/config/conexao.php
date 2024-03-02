<?php
// database Connection
$hostname = "193.203.175.32";
$username = "u956686723_salaoitalia";
$password = "5Xb/KQG;tL";
$db =  "u956686723_salaoitalia";
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

