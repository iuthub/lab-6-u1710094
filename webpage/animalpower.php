<?php
	require 'lib/session.php';
	generate();
	clear();
	if(isset($_SESSION['counter']))
		$_SESSION['counter']++;
	else
		$_SESSION['counter'] = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Power Animal</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body style="margin-top: 35vh">
	<?php if(isset($_SESSION['animal']) && isset($_SESSION['counter'])): ?>
		<div>
			<p>Counter: <?=$_SESSION['counter']?></p>
			<p>Animal: <?=$_SESSION['animal']?></p>
			<input type="submit" class="input-text" id = 'submit' value="Clear" onclick="location.href='animalpower.php?clear'">
		</div>
	<?php else: ?>
	<input type="submit" class="input-text" id = 'submit' value="Choose an animal" onclick="location.href='animalpower.php?random'">
	<?php endif ?>
</body>
</html>