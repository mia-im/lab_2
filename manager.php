<?php
session_start();
require_once 'class.php';

if ($_SESSION['role']!='admin'&&$_SESSION['role']!='manager'||empty($_SESSION['role'])){
		header('HTTP/1.0 403 Forbidden');
		die();
	}

else {
		$manager = new manager($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
		$manager->printInf();	
	}
?>

<form>
	<br><a href="admin.php"><?php echo lang::trans('Admin information'); ?></a>
	<br><a href="client.php"><?php echo lang::trans('Client information'); ?></a>
</form>
<?php include 'language.php';?>
<br><input type="button" value="<?php echo lang::trans('Log out'); ?>" onclick="location.href='main.php'">
