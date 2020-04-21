<?php
session_start();
require_once 'class.php';


if(empty($_SESSION['login'])){
	$_SESSION['login']='empty';
	header("Location: main.php");
}

elseif(empty($_SESSION['lang'])){
	header("Location: language.php");
}

else switch ($_SESSION['role']) {
	case 'admin':
		header("Location: admin.php");
		break;
	
	case 'client':
		header("Location: client.php");
		break;
	
	case 'manager':
		header("Location: manager.php");
		break;
}
?>



