<?php
	require 'lib/lib.php';

	check_for_occurence();
	check_for_email();
	check_for_num();
	replace_spaces();
	replace_nonnumeric();
	replace_newlines();
	extract_string();
?>
<!DOCTYPE html>
<html>
<head>
	<title>RegExp</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body style="margin-top: 10vh">
	<?php if($result):?>
		<input class="input-text" onclick="javascript:location.href='index.php'" id = 'submit' type="submit" value="Clear">
	<?php endif?>
<div id="left">
<form>
	<p><input class="input-text" type="text" name="full" placeholder="Full text"></p>
	<p><input class="input-text" type="text" name="word" placeholder="Search for word"></p>
	<input class="input-text" id = 'submit' type="submit" value="Check">
</form>
<br>
<form>
	<p><input class="input-text" type="text" name="email" placeholder="Email"></p>
	<input class="input-text" id = 'submit' type="submit" value="Check">
</form>
<br>

<form>
	<p><input class="input-text" type="text" name="num" placeholder="Telephone number"></p>
	<input class="input-text" id = 'submit' type="submit" value="Check">
</form>
<br>

<form>
	<p><input class="input-text" type="text" name="text" placeholder="Text to remove spaces"></p>
	<input class="input-text" id = 'submit' type="submit" value="Check">
</form>
</div>
<div id="right">
<form>
	<p><input class="input-text" type="text" name="nonnumeric" placeholder="Text to remove nonnumeric chars"></p>
	<input class="input-text" id = 'submit' type="submit" value="Check">
</form>
<br>

<form>
	<p><textarea class="input-text" type="text" name="newline" placeholder="Text to remove newlines"></textarea></p>
	<input class="input-text" id = 'submit' type="submit" value="Check">
</form>
<br>

<form>
	<p><input class="input-text" type="extract" name="word" placeholder="Text to extract string"></p>
	<input class="input-text" id = 'submit' type="submit" value="Check">
</form>
</div>
</body>
</html>