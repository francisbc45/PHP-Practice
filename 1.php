<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Back to Basics</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form method="POST">
	<input type="number" name="input1">
	<input type="number" name="input2">
	<input type="number" name="input3">
	<input type="text" name="percentage">

	

	<button type="submit" name="submit">Submit</button>
</form>

<?php 
if (isset($_POST['submit']))
{
$x = $_POST['input1'];
$a = $_POST['input2'];
$b = $_POST['input3'];
$c = $_POST['percentage'];

}
function newCalc($x)
{
$newshit = $x * $GLOBALS['c'];
echo "The of $x is ==> ".$newshit."<br>";
}


newCalc($x);

echo "<br>";

newCalc($a);

echo "<br>";

newCalc($b);

echo "<br>";

newCalc($c);


 ?>
</body>
</html>