<?php
ob_start();
session_start();

include 'lang.php';

if ($_SESSION['role']!='admin'){
	ob_end_clean();
	header('HTTP/1.0 403 Forbidden');
	die();
}
else {
	echo $translate[$lang]['Hello'].' '.$translate[$lang][$_SESSION['role']].' '.$translate[$lang][$_SESSION['name']];
}
?>

<form>
<br><a href="manager.php"><?php echo $translate[$lang]['Manager information']; ?></a>
<br><a href="client.php"><?php echo $translate[$lang]['Client information']; ?></a>
</form>
<?php include 'language.php';?>
<br><input type="button" value="<?php echo $translate[$lang]['Log out']; ?>" onclick="location.href='main.php'">
