

<!DOCTYPE html>
<html>
<head>
	<title>MD5</title>
</head>
<body>
	<form method="POST">
	<input type="text" name="hash" placeholder="Input text here">
	<button type="submit" name="submit">Submit</button>
	</form>
<?php 

if (isset($_POST['submit']))
{

	$mdfive = $_POST['hash'];

	echo "The hashed string is: ".md5($mdfive);
	echo "<br>";
	echo "The length of the string is: ".strlen($mdfive);	
}


?>





</body>
</html>