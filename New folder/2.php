<?php 

include_once 'view.php';

 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Practice</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<table>
	<thead>
		<tr>
			<th>FirstName</th>
			<th>LastName</th>
			<th>Email</th>
			<th>Username</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
		<tbody>
			<tr>
				<?php
				foreach ($result as $row) 
				{

				}
				
				?>
			</tr>
		</tbody>
</table>











	<form action="signup.php" method="POST">
		<input type="text" name="FirstName" placeholder="FirstName">
		<br>
		<input type="text" name="LastName" placeholder="LastName">
		<br>
		<input type="text" name="Email" placeholder="E-Mail">
		<br>
		<input type="text" name="uid" placeholder="Username">
		<br>
		<input type="password" name="password" placeholder="Password">
		<br>
		<button type="submit" name="submit">Submit</button>
	</form>


	





</body>
</html>