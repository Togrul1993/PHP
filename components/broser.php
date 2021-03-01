<?php


session_start();



$firstname="";
$lastname="";
$email="";
$phone="";
$adres="";
$update=false;



$mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$adres=$_POST['adres'];


	$mysqli->query("INSERT INTO data(firstname,lastname,email,phone,adres) VALUES('$firstname','$lastname','$email','$phone','$adres')") or 
	die($mysqli->error);


	$_SESSION['message1']="Ugurlu Bir sekilde eklendi";
	$_SESSION['msg_type']="success";

	header("location:http://localhost/FirstProje/");
}


if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error);
	$_SESSION['message2']="Ugurlu Bir sekilde silindi";
	$_SESSION['msg_type']="danger";

	header("location:http://localhost/FirstProje/components/blog.php");
}


if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$result=$mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);


	if(count($result)==1){
		$row=$result->fetch_array();
		$update=true;
		$firstname=$row['firstname'];
		$lastname=$row['lastname'];
		$email=$row['email'];
		$phone=$row['phone'];
		$adres=$row['adres'];
	}
}


if(isset($_POST['update'])){
	$id=$_POST['update'];

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$adres=$_POST['adres'];

	$mysqli->query("UPDATE data SET firstname='$firstname',lastname='$lastname',email='$email,phone='$phone,adres='$adres' WHERE id=$id " ) or 
	die($mysqli->error);

	$_SESSION['message']="Update olundu";
	$_SESSION['msg_type']="danger";

	header("location:http://localhost/FirstProje/components/blog.php");
}

?>

