<?php
	session_start();
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
			alert('Traveler Log Added Successful');
		}
	}
</script>
<html>
<head>
	<title>Traveler's Diaries</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="userinteraction">
		<h2>Add Post</h2>
		<h3>Enter Traveler Log Details:</h3>
		<div class="error"><b id="validationError"></b></div>
		<form method="post" action="processing/addLogProcessing.php" onSubmit="return validation3()">
			<table>
				<tr><td>Traveler (Posted By):* </td><td><input type="text" name="traveler" id="traveler" value="<?php echo $_SESSION['uname'];?>" readonly /></td></tr>
				<tr><td>Post Info:* </td><td><input type="text" name="post_info" id="post_info" /></td></tr>
				<tr><td>Location: </td><td><input type="text" name="location" /></td></tr>
				<tr><td>Image: </td><td><input type="file" name="image" /></td></tr>
				<tr><td><input type="submit" value="Add Log"  /></td><td><input type="reset" /></td></tr>
			</table>
		</form>
		<p><a href="menu.php"> Go TO Menu </a></p>
	</div>
</body>
</html>
