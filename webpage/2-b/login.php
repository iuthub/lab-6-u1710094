<?php
	require '../lib/login.php';
	if(isset($_POST['login']) && isset($_POST['pass']))
	{
		login();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
<form method="POST">
	<?php if($error): ?>
	<p style="color: red;">Incorrect login or password</p>
	<?php endif ?>
	<p><input class="input-text" type="text" name="login" placeholder="Login"></p>
	<p><input class="input-text" type="password" name="pass" placeholder="Password"></p>
	<input class="input-text" id = 'submit' type="submit" value="Check">
</form>
</body>
</html>