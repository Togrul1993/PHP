<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Blog</title>
	
</head>
<body>
	<?php require_once './broser.php'?>


	<?php 
	if(isset($_SESSION['message2'])):
	
?>	
<div class="alert alert-<?=$_SESSION['msg_type']  ?>">
	
		<?php
			echo $_SESSION['message2'];
			
		?>
</div>
	
<?php endif ?>

	<a class="link" href="http://localhost/FirstProje/">Home</a>
	
	<?php
		$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
		$result=$mysqli->query("SELECT * FROM data") or die($mysqli->error);
		//pre_r($result);
	?>

	<table class="table table-striped table-dark">

	  <thead>
	    <tr>
	      <th scope="col">First Name</th>
	      <th scope="col">Last Name</th>
		 <th scope="col">Address</th>
	      <th scope="col">Email</th>
		 <th scope="col">Phone</th>
		 
		 <th scope="col">Date</th>
	    </tr>
	  </thead>

	  <tbody>
	  <?php
		while($row=$result->fetch_assoc()): ?>

	    <tr>
	      <td><?php echo $row['firstname'] ?></td>
	      <td><?php echo $row['lastname'] ?></td>
		 <td><?php echo $row['adres'] ?></td>
	      <td><?php echo $row['email'] ?></td>
		 <td>(+994)<?php echo $row['phone'] ?></td>
		 <td><?php echo $row['tarix'] ?></td>
		 <td>
			<a href="../index.php?edit=<?php echo $row['id']; ?>" class="primary">Edit</a>
			<a href="./blog.php?delete=<?php echo $row['id']; ?>" class="danger">Delete</a>
		 </td>
	    </tr>

		<?php endwhile; ?>
	   
	  </tbody>

	</table>


	<?php
		function pre_r($array){
			echo '<pre>';
			print_r($array);
			echo '</pre>';
		}
	
	?>
</body>
</html>