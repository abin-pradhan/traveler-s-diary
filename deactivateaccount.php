<?php
	session_start();
?>
<html>
<head>
	<title>Traveler's Diaries</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="userinteraction">
		<h2>Deactivate Account</h2>
		<h3>Enter Account Details to Delete</h3>
		<p><a href="menu.php">Go TO Menu</a></p>
		<p>Warning: Once the Account is deleted, it cannot be recovered and the post will also be removed permanently. </p>
		<h2>Enter Account Details</h2>
		<form method="post" action="processing/deactivateAccountProcessing.php">
			<p>Username: <input type="text" name="delUsername" value="<?php echo $_SESSION['uname'];?>" /></p>
			<p>Password: <input type="password" name="delPassword" /></p>
			<p><input type="submit" value="Delete Account" /></p>
		</form>
	</div>
</body>
</html>