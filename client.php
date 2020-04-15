<?php
session_start();
require_once 'class.php';

if (empty($_SESSION['role'])){
		header('HTTP/1.0 403 Forbidden');
		die();
	}

else {
		$client = new client($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
		$client->printInf();		
	}
?>

<form>
	<br><a href="admin.php"><?php echo lang::trans('Admin information'); ?></a>
	<br><a href="manager.php"><?php echo lang::trans('Manager information'); ?></a>
</form>
<?php include 'language.php';?>
<br><input type="button" value="<?php echo lang::trans('Log out'); ?>" onclick="location.href='main.php'">
