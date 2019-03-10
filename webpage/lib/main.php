<?php

define("LOGIN", "test");
define("PASS", "test123");

if(isset($_COOKIE['maincookie']) && !empty($_COOKIE['maincookie']))
{
	$real_data = md5(md5(LOGIN . PASS)).md5("saltsaltsalt");
	if($_COOKIE['maincookie'] != $real_data)
	{
		header("Location: login.php");
		exit;
	}
}
else
{
	header("Location: login.php");
	exit;
}

function logout()
{
	setcookie('maincookie', '', 1, '/');
	header("Location: login.php");
	exit;
}


?>