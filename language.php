<?php
session_start();
include 'lang.php';
?>

<form method="POST" action="language_.php" >
	<select name="lang" >
		<option value="ru">Русский</option>
		<option value="uk">Українська</option>
		<option value="en">English</option>
	</select>
<input type="submit" value="<?php echo $translate[$lang]['Choose']; ?>"/>
</form>






