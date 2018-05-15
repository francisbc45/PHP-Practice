<?php 
	include_once '3.php';
	


	$first = $_POST['FirstName'];
	$last = $_POST['LastName'];
	$email = $_POST['Email'];
	$userid = $_POST['uid'];
	$pwd = $_POST['password'];






	$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$userid', '$pwd');";
	mysqli_query($conn, $sql);
	


	header ("Location: 2.php?signup=success");

 ?>