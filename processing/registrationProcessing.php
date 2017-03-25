<?php
	include('../database.php');
?>
<?php
	$name = $_POST['name'];
	$un = $_POST['un'];
	$pwd = $_POST['pwd'];
	$email = $_POST['email'];
	
	$query = "INSERT INTO `traveler` (`name`, `username`, `password`, `email`) VALUES ('".$name."', '".$un."', '".$pwd."', '".$email."')";
	mysql_query($query);
	header('location:../register.php');
?>