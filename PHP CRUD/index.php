<?php include('action.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php if (isset($_SESSION['msg'])):  ?>

 <div class="msg">
 	<?php 

 	echo $_SESSION['msg'];
 	unset($_SESSION['msg']);

 	 ?>
 </div>

 <?php endif ?>

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
				<?php  foreach ($results as $row)  /*while ($row = mysqli_fetch_array($results))*/
				{ ?>	
					<tr>
							<td><?php echo $row['user_first']; ?></td>
							<td><?php echo $row['user_last']; ?></td>
							<td><?php echo $row['user_email']; ?></td>
							<td><?php echo $row['user_uid']; ?></td>
						<td>
							<a href="#">Edit</a>
						</td>
						<td>
							<a href="#">Delete</a>
					</td>
				</tr>
		<?php	}	?>
			</tbody>
	</table>
<form method="POST" action="action.php">
	<div class="input-group">
		<label>FirstName</label>
		<input type="text" name="name">

	</div>
	<div class="input-group">
		<label>LastName</label>
		<input type="text" name="last">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email">
		
	</div>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<button type="submit" name="save" class="btn">Save</button>
		
	</div>
</form>
</body>
</html>