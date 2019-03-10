<?php

$result = false;

function check_for_occurence()
{
	global $result;
	if(isset($_GET['full']) && isset($_GET['word']))
	{
		if(!empty($_GET['full']) && !empty($_GET['word']))
		{
			$sent = $_GET['full'];
			$word = $_GET['word'];
			$pattern = "/" . $word . "/";
			echo "<p>Result:</p>";
			if(preg_match($pattern, $sent))
			{
				echo "<p>There is '{$word}' in '{$sent}'</p>";
			}
			else
			{
				echo "<p>There is no '{$word}' in '{$sent}'</p>";
			}
			echo "<br>";
		}
		else
		{
			echo "<p>Some problem occured...</p>";
		}
		$result = true;
	}
}

function check_for_email()
{
	global $result;
	if(isset($_GET['email']))
	{
		if(!empty($_GET['email']))
		{
			$email = $_GET['email'];
			$pattern = "/^[\.?\w{3,}]+@\w{2,}(\.\w{2,})+$/";
			echo "<p>Result:</p>";

			if(preg_match($pattern, $email))
			{
				echo "<p>'{$email}' is email</p>";
			}
			else
			{
				echo "<p>'{$email}' is not email</p>";
			}
			echo "<br>";
		}
		else
		{
			echo "<p>Some problem occured...</p>";
		}
		$result = true;
	}
}

function check_for_num()
{
	global $result;
	if(isset($_GET['num']))
	{
		if(!empty($_GET['num']))
		{
			$num = $_GET['num'];
			$pattern = "/^\+998-\d{2}-\d{3}-\d{4}$/";
			echo "<p>Result:</p>";

			if(preg_match($pattern, $num))
			{
				echo "<p>'{$num}' is tel number</p>";
			}
			else
			{
				echo "<p>'{$num}' is not tel number</p>";
			}
			echo "<br>";
		}
		else
		{
			echo "<p>Some problem occured...</p>";
		}
		$result = true;
	}
}

function replace_spaces()
{
	global $result;
	if(isset($_GET['text']))
	{
		if(!empty($_GET['text']))
		{
			$text = $_GET['text'];
			$pattern = "/\s/";
			echo "<p>Result:</p>";

			echo "<p>" . preg_replace($pattern, '', $text) . "<p>";

			echo "<br>";
		}
		else
		{
			echo "<p>Some problem occured...</p>";
		}
		$result = true;
	}
}

function replace_nonnumeric()
{
	global $result;
	if(isset($_GET['nonnumeric']))
	{
		if(!empty($_GET['nonnumeric']))
		{
			$text = $_GET['nonnumeric'];
			$pattern = "/[^0-9,\.]/";
			echo "<p>Result:</p>";

			echo "<p>" . preg_replace($pattern, '', $text) . "<p>";

			echo "<br>";
		}
		else
		{
			echo "<p>Some problem occured...</p>";
		}
		$result = true;
	}
}

function replace_newlines()
{
	global $result;
	if(isset($_GET['newline']))
	{
		if(!empty($_GET['newline']))
		{
			$text = $_GET['newline'];
			$pattern = "/\n/";
			echo "<p>Result:</p>";

			echo "<p>" . preg_replace($pattern, '', $text) . "<p>";

			echo "<br>";
		}
		else
		{
			echo "<p>Some problem occured...</p>";
		}
		$result = true;
	}
}

function extract_string()
{
	global $result;
	if(isset($_GET['extract']))
	{
		if(!empty($_GET['extract']))
		{
			$extract = $_GET['extract'];
			$matches = array();
			$pattern = "/\[\w+\]/";
			echo "<p>Result:</p>";
			if(preg_match($pattern, $extract, $matches))
			{
				echo "<p>" . preg_replace('/[\[\]]/', '', $matches[0]) . "<p>";
			}
			else
			{
				echo "<p>No occurence</p>";
			}
			echo "<br>";
		}
		else
		{
			echo "<p>Some problem occured...</p>";
		}
		$result = true;
	}
}

?>