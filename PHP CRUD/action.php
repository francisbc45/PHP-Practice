<?php 

session_start();


$name = "";
$lastname = "";
$email = "";
$username = "";
$pwd = "";


$db = mysqli_connect('localhost', 'root', '', 'nissiel');


if (isset($_POST['save']))
{
	$name = $_POST['name'];
	$lastname = $_POST['last'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$pwd = $_POST['password'];

	$query = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$name', '$lastname', '$email', '$username', '$pwd')";
	mysqli_query($db, $query);
	$_SESSION['msg'] = "Success!";
	header('Location: index.php');

}


$results = mysqli_query($db, "SELECT * FROM users");




 ?>