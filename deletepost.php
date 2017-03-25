<?php
	session_start();
?>
<?php
	include('database.php');
?>
<html>
<head>
	<title>Traveler's Diaries</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="userinteraction">
		<h2>Delete Post</h2>
		<h3>Select a Post to Delete</h3>
		<p><a href="menu.php">Go TO Menu</a></p>
		<?php
			$query = "SELECT * FROM `post` where `traveler` = ".'"'.$_SESSION['uname'].'"';
			$result = mysql_query($query);
			while($data = mysql_fetch_array($result))
			{
				$post_id = $data['post_id'];
				$traveler = $data['traveler'];
				$post_info = $data['post_info'];
				$location = $data['location'];
				$image = $data['image'];
		?>
		<hr/>
		<p><b>Post ID:</b><?php echo $post_id; ?> </p>
		<p><b>Posted By: </b><?php echo $traveler; ?> </p>
		<p><b>Post: </b><?php echo $post_info; ?> </p>
		<p><b>Location:</b><?php echo $location;?> </p>
		<p><img src="images/<?php echo $image;?>" alt="Image not available" width="200px" height="150px" /> </p>
		<p><a href="processing/deleteProcessing.php?id=<?php echo $post_id;?>">Delete Post</a></p>
		<hr/>
		<?php
			}
		?>
	</div>
</body>
</html>