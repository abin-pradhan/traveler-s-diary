<script>
	function validation()
	{
		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;
		if(username=='')
		{
			document.getElementById('validationError').innerHTML = "Username Field is Empty";
			return false;
		}
		else if(password=='')
		{
			document.getElementById('validationError').innerHTML = "Password Field is Empty";
			return false;
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
			<h2>Traveler Login</h2>
			<h3>Enter Login Details</h3>
			<div class="error"><b id="validationError"></b></div>
			<form method="post" action ="processing/loginProcessing.php" onSubmit="return validation()">
				<p>Username: <input type="text" name="username" id="username" value="abin" /></p>
				<p>Password: <input type="password" name="password" id="password" value="abin" /></p>
				<p><input type="submit" value="LOGIN" /></p>
			</form>
			<p><a href="register.php">Create New Account </a></p>
	</div>
</body>
</html>

