<?php
session_start();
$_SESSION['email'];
//include ("connection2.php");
if(!isset($_SESSION['email'])){
    header('location:login.html');
}







?>