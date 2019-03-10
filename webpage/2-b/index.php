<?php
	require '../lib/main.php';
	if(isset($_GET['logout']))
	{
		logout();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
<h1 style="margin: auto;">OMG!!!</h1>
<input type="submit" value="Logout" class="input-text" id = 'submit' onclick="location.href='index.php?logout'">
</body>
</html>