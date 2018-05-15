<?php 

session_start();


$name = "";
$lastname = "";
$email = "";
$username = "";
$pwd = "";
$edit_state = false;
$id = 0;


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


if (isset($_POST['update']))
{
	$name = $_POST['name'];
	$lastname = $_POST['last'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$id = $_POST['id'];



	mysqli_query($db, "UPDATE users SET user_first='$name', user_last='$lastname', user_email='$email', user_uid='$username' WHERE id = $id");
	$_SESSION['msg'] = "Successfully Updated!";
	header("Location: index.php");
}


$results = mysqli_query($db, "SELECT * FROM users");



if (isset($_GET['del']))
{
	$id = $_GET['del'];
	mysqli_query($db, "DELETE from users WHERE id = $id");
	$_SESSION['msg'] = "Successfully Deleted!";
	header("Location: index.php");
}



 ?>