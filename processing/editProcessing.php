<?php
	include('../database.php');
?>
<?php
	$post_id = $_POST['post_id'];
	$traveler = $_POST['traveler'];
	$post_info = $_POST['post_info'];
	$location = $_POST['location'];
	$image = $_POST['image'];
	
	$query = "UPDATE `post` SET `post_info` = ".'"'.$post_info.'"'.", `location` = ".'"'.$location.'"'. ", `image` = ".'"'.$image.'"'."WHERE `post_id` = ".$post_id;
	mysql_query($query);
	header('location:../editpost.php');
?>