<?php
$connect = mysqli_connect("localhost", "root", "", "katomessi"); 


session_start();
session_unset();
session_destroy();

header('location:login.php');

?>

