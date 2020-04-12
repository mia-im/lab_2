<?php
session_start();

$lang=$_POST['lang'];
$_SESSION['lang']=$lang;
header("Location:if.php");
?>