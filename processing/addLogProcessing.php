<?php
	include('../database.php');
?>
<?php
	$traveler = $_POST['traveler'];
	$post_info = $_POST['post_info'];
	$location = $_POST['location'];
	$image = $_POST['image'];
	
	$query = "INSERT INTO `post` (`traveler`, `post_info`, `location`, `image`) VALUES ('". $traveler ."', '". $post_info ."', '". $location ."', '". $image ."') ";
	mysql_query($query);
	header('location:../addpost.php');
?>