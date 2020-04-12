<?php
session_start();

$lang=$_SESSION['lang'];

if ( empty($lang)) {
			$lang = "ru" ;
}

$translate =[
		'ru'=>['Hello'=>'Привет', 'admin'=>'админ', 'manager'=>'менеджер', 'client'=>'клиент', 'Василий'=>'Василий','Афанасий'=>'Афанасий','Петр'=>'Петр','Педро'=>'Педро','Александр'=>'Александр','Admin information'=>'Информация администраторов', 'Manager information'=>'Информация менеджера','Client information'=>'Информация клиента', 'Continue'=>'Продолжить', 'Log out'=>'Выйти','Choose'=>'Выбрать'],
		'en'=>['Hello'=>'Hello','admin'=>'admin', 'manager'=>'manager', 'client'=>'client', 'Василий'=>'Vasisualiy','Афанасий'=>'Afanasiy','Петр'=>'Petro','Педро'=>'Pedro','Александр'=>'Sasha', 'Admin information'=>'Admin information', 'Manager information'=>'Manager information','Client information'=>'Client information','Continue'=>'Continue', 'Log out'=>'Log out','Choose'=>'Choose'],
		'uk'=>['Hello'=>'Привіт','admin'=>'адмін','manager'=>'менеджер', 'client'=>'клієнт','Василий'=>'Василь','Афанасий'=>'Афанасій','Петр'=>'Петро','Педро'=>'Педро','Александр'=>'Олександр','Admin information'=>'Iнформація адміністраторів', 'Manager information'=>'Інформація менеджера','Client information'=>'Інформація клієнта','Continue'=>'Продовжити', 'Log out'=>'Вийти','Choose'=>'Вибрати'],
];
?>



