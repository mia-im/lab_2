<?php
session_start();


$users = [
['login' => 'Vasisualiy', 'password' => '12345', 'name'=>'Василий','surname'=>'Лоханкин', 'lang' => 'ru','role'=>'admin'],
['login' => 'Afanasiy', 'password' => '54321', 'name'=>'Афанасий','surname'=>'Цукерберг', 'lang' => 'en','role'=>'client'],
['login' => 'Petro', 'password' => '11111', 'name'=>'Петр','surname'=>'Инкогнито' ,'lang' => 'uk','role'=>'manager'],
['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'name'=>'Педро','surname'=>'Миланов', 'lang' => 'ru','role'=>'client'],
['login' =>'Sasha', 'password' => '00000', 'name'=>'Александр','surname'=>'Александров', 'role'=>'admin'],
];

$i=0;
foreach ($users as $item) {
	if($users[$i]['login']==$_POST["login"] && $users[$i]['password']==$_POST["password"]){
		$_SESSION=$users[$i];
	}
	$i++;
}
 header("Location: if.php");
?>																																																


