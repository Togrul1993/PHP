<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	
	<title>PHP Crud</title>
</head>
<body>

	<?php require_once './components/broser.php'?>

	<?php 
		if(isset($_SESSION['message1'])):
	
	?>	
	<div class="alert alert-<?=$_SESSION['msg_type']  ?>">
	
			<?php
				echo $_SESSION['message1'];
				
			?>

	</div>
	<?php endif ?>




	
	<div class="container">

		<a href="./components/blog.php">Blog</a>

		<h1>PHP CRUD</h1>

		<form action="../FirstProje/index.php" method="POST"> 
			<input type="text" placeholder="First Name" name="firstname" value="<?php echo $firstname?>" required/>

			<input type="text" placeholder="Last Name" name="lastname" value="<?php echo $lastname?>"   required/>

			<input type="email" placeholder="Enter Email" name="email" value="<?php echo $email?>"   required/>

			<input type="tel" placeholder="Enter Phone Number" name="phone" value="<?php echo $phone?>"  required/>

			<input type="text" name="adres" placeholder="Enter Address" placeholder="Address"  value="<?php echo $adres?>"  required/>


			<?php 
				if($update==true):?>
					<button class="button btn-info" type="submit" name="update">Update</button>
			<?php else : ?>
					<button class="button btn-info" type="submit" name="save">Add Crud</button>
			<?php endif?>
		</form>

	</div>

</body>
</html>