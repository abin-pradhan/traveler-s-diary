<?php
	include('database.php');
?>
<script>
	function validation3()
	{
		var traveler_id = document.getElementById('traveler').value;
		var post_info = document.getElementById('post_info').value;
		if(traveler=='')
		{
			document.getElementById('validationError').innerHTML = "Traveler ID field cannot be empty";
			return false;
		}else if(post_info=='')
		{
			document.getElementById('validationError').innerHTML = "Post Info field cannot be empty";
			return false;
		}else{
			alert('Post Edited Successful');
		}
	}
</script>
<?php
	$id = $_GET['id'];
	$query = "SELECT * FROM `post` WHERE `post_id` = ".$id;
	$result = mysql_query($query);
	while($data = mysql_fetch_array($result))
	{
		$traveler = $data['traveler'];
		$post_info = $data['post_info'];
		$location = $data['location'];
		$image = $data['image'];
	}
?>
<html>
<head>
	<title>Traveler's Diaries</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="userinteraction">
		<h2>Edit Post</h2>
		<h3>Change Data to Edit Post</h3>
		<div class="error"><b id="validationError"></b></div>
		<form method="post" action="processing/editProcessing.php" onSubmit="return validation3()">
			<table>
				<tr><td>Post ID:* </td><td><input type="text" name="post_id" id="post_id" value="<?php echo $id;?>" readonly /></td></tr>
				<tr><td>Traveler (Posted By):* </td><td><input type="text" name="traveler" id="traveler" value="<?php echo $traveler;?>" readonly  /></td></tr>
				<tr><td>Post Info:* </td><td><input type="text" name="post_info" id="post_info" value="<?php echo $post_info;?>"   /></td></tr>
				<tr><td>Location: </td><td><input type="text" name="location" value="<?php echo $location;?>" /></td></tr>
				<tr><td>Image: </td><td><input type="file" name="image" value="<?php echo $image;?>"  /></td></tr>
				<tr><td><input type="submit" value="Edit Post"  /></td><td><input type="reset" /></td></tr>
			</table>
		</form>
		<p><a href="menu.php"> Go TO Menu </a></p>
	</div>
</body>
</html>