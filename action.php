<?php 

if (isset($_POST['butt']))
{

	include_once 'dd.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];


	if (empty($first) || empty($last) || empty($email) || empty($username) || empty($password)) 
	{
		header("Location: index.php?signup=empty");
		exit();
	}
	else 
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			header("Location: index.php?signup=invalidemail");
			exit();
		}
		else
		{
			if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) 
			{
				header("Location: index.php?signup=char");	
				exit();
			}
			else 
			{
				header("Location: index.php?signup=success");
				exit();
			}
		}
	}
}

else
{
	header("Location: index.php?signup=error");
	exit();
}
 ?>