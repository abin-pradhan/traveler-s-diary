<?php
	include('../database.php');
?>
<?php
	$un = $_POST['delUsername'];
	$pwd = $_POST['delPassword'];
	
	$query = "DELETE FROM `traveler` WHERE `username` = ".'"'.$un.'"' ."and `password` = ".'"'.$pwd.'"';
	mysql_query($query);
	$query2 = "DELETE FROM `post` WHERE `traveler` = ".'"'.$un.'"';
	mysql_query($query2);
	header('location:../index.php');
?>