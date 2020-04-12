<?php
session_start();

$user = [
['login' => 'Vasisualiy', 'password' => '12345', 'name'=>'Василий','surname'=>'Лоханкин', 'lang' => 'ru','role'=>'admin'],
['login' => 'Afanasiy', 'password' => '54321', 'name'=>'Афанасий','surname'=>'Цукерберг', 'lang' => 'en','role'=>'client'],
['login' => 'Petro', 'password' => 'EkUC42nzmu', 'name'=>'Петр','surname'=>'Инкогнито' ,'lang' => 'ua','role'=>'manager'],
['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'name'=>'Педро','surname'=>'Миланов', 'lang' => 'ru','role'=>'client'],
['login' =>'Sasha', 'password' => 'Ignorantia_non_excusat', 'name'=>'Александр','surname'=>'Александров', 'role'=>'admin'],
];

$i=0;
foreach ($user as $item) {

	if($user[$i]['login']==$_POST["login"] && $user[$i]['password']==$_POST["password"]){

		$_SESSION['name']=$item['name'];
		$_SESSION['surname']=$item['surname'];
		$_SESSION['role']=$item['role'];
		$_SESSION['lang']=$item['lang'];
		$_SESSION['password']=$item['password'];
		$_SESSION['login']=$item['login'];

	}
	$i++;
}
 
 header("Location: if.php");
?>																																																


