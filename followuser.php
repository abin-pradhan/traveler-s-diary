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
		<h2>Follow User</h2>
		<h3>Click Follow Button to Follow Other Users</h3>
		<p>Note: You cannot follow yourself.</p>
		<p><a href="menu.php">Go TO Menu</a></p>
		<h3>User List</h3>
		<table border="1">
			<tr><th>User ID</th><th>Username</th><th>Action</th></tr>
			<?php
				$query = "SELECT * FROM `traveler`";
				$result = mysql_query($query);
				while($data = mysql_fetch_array($result))
				{
					$traveler_id = $data['traveler_id'];
					$username = $data['username'];
			?>
			<tr><td><?php echo $traveler_id;?></td><td><?php echo $username;?></td><td><form><input type="submit" value="Follow User" onClick="follow()" /></form></td></tr>
			<?php
				}
			?>
		</table>
	</div>
</body>
</html>

<script>
	function follow()
	{
		alert("You Follow the User");
	}
</script>