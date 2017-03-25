<?php
	include('../database.php');
?>
<?php
	$id = $_GET['id'];
	$query = "DELETE FROM `post` where `post_id` = ".$id;
	mysql_query($query);
	header('location:../deletepost.php');
?>