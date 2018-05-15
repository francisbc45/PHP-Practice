<?php 

include_once 'view.php';

 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Practice</title>
</head>
<body>


<table class="column">
	<tr>
	<td>First Name</td>

		<?php 
		foreach ($result as $row) 
		{
			echo "<table>";

			echo "<tr>";

			echo "<td>".$row["user_first"]."</td>";

			echo "<br>";

			echo $row["user_last"];

			echo "<br>";

			echo $row["user_email"];

			echo "<br>";

			echo $row["user_uid"];

			echo "<br>";

			echo "</tr>";

			echo "</table>";
			
		}


		 ?>
		
</tr>
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