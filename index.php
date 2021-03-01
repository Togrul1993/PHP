<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css"/>

	<title>PHP Crud</title>
</head>
<body>

	<div class="container">

		<h1>PHP CRUD</h1>

		<form action="" method="POST"> 
			<input type="text" placeholder="First Name" name="firstname" value="" required/>
			<input type="text" placeholder="Last Name" name="lastname" value="" required/>
			<input type="email" placeholder="Enter Email" name="email" value="" required/>
			<input type="tel" placeholder="Enter Phone Number" name="phone" value="" required/>
			<textarea name="adres" placeholder="Enter Address" rows="8" cols="20"></textarea>
			<button class="button" type="submit">Add Crud</button>
		</form>

	</div>

</body>
</html>