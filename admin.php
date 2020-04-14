<?php
session_start();
require_once 'class.php';


if ($_SESSION['role']!='admin'){
		header('HTTP/1.0 403 Forbidden');
		die();
	}

else {
		echo lang::trans('Hello').' '.lang::trans($_SESSION['role']).' '.lang::trans($_SESSION['name']);
	}
?>

<form>
	<br><a href="manager.php"><?php echo lang::trans('Manager information'); ?></a>
	<br><a href="client.php"><?php echo lang::trans('Client information'); ?></a>
</form>
<?php include 'language.php';?>
<br><input type="button" value="<?php echo lang::trans('Log out'); ?>" onclick="location.href='main.php'">
