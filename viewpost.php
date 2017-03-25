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
		<h2>View Post</h2>
		<h3>Timeline of <?php echo $_SESSION['uname'];?> </h3>
		<p><a href="menu.php">Go TO Menu</a></p>
		<?php
			$query = "SELECT * FROM `post`";
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
		<p><form onClick="liked()"><input type="submit" value="Like" /></form></p>
		<p><form><input type="submit" value="Comment"  onClick="comment()"/></form></p>
		<hr/>
		<?php
			}
		?>	
	</div>
</body>
</html>

<script>
	function liked()
	{
		alert("You liked the post.");
	}
	function comment()
	{
		alert("This Function is not Embedded in this Version. Please Try Again Later.");
	}
</script>