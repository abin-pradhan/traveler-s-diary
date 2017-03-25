<?php
	session_start();
?>
<?php
	include('../database.php');
?>
<?php
	$username = $_POST['username'];
	$_SESSION['uname'] = $username;
	$password = $_POST['password'];
	
	$query = "select * from `traveler` where username = '" . $username . "' and password = '". $password."' ";
	$result = mysql_query($query);
	if(mysql_num_rows($result)>0)
	{
		header('location:../menu.php');
	}
	else
	{
		header('location:../index.php');
	}
?>