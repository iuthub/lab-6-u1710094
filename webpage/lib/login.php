<?php

define("LOGIN", "test");
define("PASS", "test123");

$error = false;

if(isset($_COOKIE['maincookie']) && !empty($_COOKIE['maincookie']))
{
	$real_data = md5(md5(LOGIN . PASS)).md5("saltsaltsalt");
	if($_COOKIE['maincookie'] == $real_data)
	{
		header("Location: index.php");
		exit;
	}
}

function login()
{
	if(empty($_POST['login']) || empty($_POST['pass']))
		return;
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	if($login == LOGIN && $pass == PASS)
	{
		$data = md5(md5(LOGIN . PASS)).md5("saltsaltsalt");
		setcookie("maincookie", $data, time()+86400, '/');
		header("Location: index.php");
		exit;
	}
	global $error;
	$error = true;
}


?>