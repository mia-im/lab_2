<?php 
session_start();
session_destroy();
?>

<html>
<head>
	<meta charset=utf-8>
	<title></title>
</head>
<body>
<form method="POST" action="user.php">
<p>Введите данные  
<p><strong>Логин: </strong> 
<input type ="text" name="login"><br/>
<p><p><strong>Пароль:</strong>
<input type ="password" name = "password"><br/>
<p><input type ="submit" value = "Подтвердить">
</form>





