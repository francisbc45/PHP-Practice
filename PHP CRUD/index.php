<?php include('action.php'); 

if (isset($_GET['update']))
{

	$edit_state = true;
	$id = $_GET['update'];

	$rec = mysqli_query($db, "SELECT * FROM users WHERE id = $id");
	$record = mysqli_fetch_array($rec);
	$name = $record['user_first'];
	$lastname = $record['user_last'];
	$email = $record['user_email'];
	$username = $record['user_uid'];
	$id = $record['id'];
}


?>

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
							<a href="index.php?update=<?php echo $row['id']; ?>">Edit</a>
						</td>
						<td>
							<a href="action.php?del=<?php echo $row['id']; ?>">Delete</a>
					</td>
				</tr>
		<?php	}	?>
			</tbody>
	</table>
<form method="POST" action="action.php">
	<input type="hidden" name = "id" value="<?php echo $id; ?>"></input>
	<div class="input-group">
		<label>FirstName</label>
		<input type="text" name="name" value="<?php echo $name; ?>">

	</div>
	<div class="input-group">
		<label>LastName</label>
		<input type="text" name="last" value="<?php echo $lastname; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
		
	</div>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<?php if ($edit_state == false): ?>
			<button type="submit" name="save" class="btn">Save</button>
		<?php else: ?>
			<button type="submit" name="update" class="btn">Update</button>
		<?php endif ?>
		
		
	</div>
</form>
</body>
</html>