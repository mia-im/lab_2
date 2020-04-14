<?php
session_start();
require_once 'class.php';


if(empty($_SESSION['login'])){
	header("Location: main.php");
}

elseif(empty($_SESSION['lang'])){
	$_SESSION['lang'] = 'ru';
	header("Location: language.php");
}

else switch ($_SESSION['role']) {
	case 'admin':
		$admin = new admin($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
		header("Location: admin.php");
		break;
	
	case 'client':
		$client = new client($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
		header("Location: client.php");
		break;
	
	case 'manager':
		$manager = new manager($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
		header("Location: manager.php");
		break;
}
?>



