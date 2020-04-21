<?php
session_start();
class User{

public $name;
public $surname;
public $role;
public $lang;

public function __construct($role, $name,$surname,$lang)
	{
		$this->role = $role;
		$this->name = $name;
		$this->surname = $surname;
		$this->lang = $lang;
	}

public function printInf()
	{
		echo lang::trans('Hello').' '.lang::trans($_SESSION['role']).' '.lang::trans($_SESSION['name']).'.<br/><br/>';
	}
}

class admin extends User{

public function printInf()
	{
   		parent::printInf();
   		echo lang::trans('Admin information');
 	}
}

class client extends User{

public function printInf()
	{
   		parent::printInf();
   		echo lang::trans('Client information');
 	}
}

class manager extends User{

public function printInf()
	{
   		parent::printInf();
   		echo lang::trans('Manager information');
 	}
}
class lang {

public static $translate=[
		'ru'=>['Hello'=>'Привет', 'admin'=>'админ', 'manager'=>'менеджер', 'client'=>'клиент', 'Василий'=>'Василий','Афанасий'=>'Афанасий','Петр'=>'Петр','Педро'=>'Педро','Александр'=>'Александр','Admin information'=>'Информация администраторов', 'Manager information'=>'Информация менеджера','Client information'=>'Информация клиента', 'Continue'=>'Продолжить', 'Log out'=>'Выйти','Choose'=>'Выбрать'],
		'en'=>['Hello'=>'Hello','admin'=>'admin', 'manager'=>'manager', 'client'=>'client', 'Василий'=>'Vasisualiy','Афанасий'=>'Afanasiy','Петр'=>'Petro','Педро'=>'Pedro','Александр'=>'Sasha', 'Admin information'=>'Admin information', 'Manager information'=>'Manager information','Client information'=>'Client information','Continue'=>'Continue', 'Log out'=>'Log out','Choose'=>'Choose'],
		'uk'=>['Hello'=>'Привіт','admin'=>'адмін','manager'=>'менеджер', 'client'=>'клієнт','Василий'=>'Василь','Афанасий'=>'Афанасій','Петр'=>'Петро','Педро'=>'Педро','Александр'=>'Олександр','Admin information'=>'Iнформація адміністраторів', 'Manager information'=>'Інформація менеджера','Client information'=>'Інформація клієнта','Continue'=>'Продовжити', 'Log out'=>'Вийти','Choose'=>'Вибрати'],
];

public static function trans($text)
	{
		if (empty($_SESSION['lang']))
			{
				$_SESSION['lang']='ru';
			}
                return self::$translate[$_SESSION['lang']][$text];
	}
}

function auth(){
	if (empty($_SESSION['role'])){
			return null;
		}
	
	if ($_SESSION['role']=='admin'){
		return new admin($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
	}
	if ($_SESSION['role']=='manager'){
		return new manager($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
	}
	if ($_SESSION['role']=='client'){
		return new client($_SESSION['role'],$_SESSION['name'],$_SESSION['surname'],$_SESSION['lang']);
	}
}
?>
