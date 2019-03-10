<?php

session_start();

function generate()
{
	$animals = ['Tiger', 'Lion', 'Bear', 'Panther', 'Jaguar', 'Elephant', 'Wolf'];
	if(isset($_GET['random']))
	{
		$_SESSION['animal'] = $animals[rand(0, count($animals)-1)];
		header("Location: animalpower.php");
		exit;
	}
}

function clear()
{
	if(isset($_GET['clear']))
	{
		session_destroy();
		header("Location: animalpower.php");
		exit;
	}
}


?>