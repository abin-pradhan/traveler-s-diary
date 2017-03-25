<script>
	function validation2()
	{
		var name= document.getElementById('name').value;
		
		var un = document.getElementById('un').value;
		var pwd = document.getElementById('pwd').value;
		var pwd2 = document.getElementById('pwd2').value;
		var email = document.getElementById('email').value;
		if(name=='')
		{
			document.getElementById('validationError').innerHTML = "Name field cannot be empty";
			return false;
		}else if(un=='')
		{
			document.getElementById('validationError').innerHTML = "Username field cannot be empty";
			return false;
		}else if(pwd=='')
		{
			document.getElementById('validationError').innerHTML = "Password field cannot be empty";
			return false;
		}else if(pwd != pwd2)
		{
			document.getElementById('validationError').innerHTML = "Passwords donot match.";
			return false;
		}else if(email=='')
		{
			document.getElementById('validationError').innerHTML = "Email field cannot be empty";
			return false;
		}
		else{
			alert('Traveler Registration Successful');
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
		<h2>Traveler Registration</h2>
		<h3>Enter Details to Register</h3>
		<div class="error"><b id="validationError"></b></div>
		<form method="post" action="processing/registrationProcessing.php" onSubmit="return validation2()">
			<table>
				<tr><td>Name:* </td><td><input type="text" name="name" id="name" /></td></tr>
				<tr><td>Username:* </td><td><input type="text" name="un" id="un" /></td></tr>
				<tr><td>Password:* </td><td><input type="password" name="pwd" id="pwd" /></td></tr>
				<tr><td>Retype Password:* </td><td><input type="password" name="pwd2" id="pwd2" /></td></tr>
				<tr><td>Email:* </td><td><input type="email" name="email" id="email" /></td></tr>
				<tr><td><input type="submit" value="Register"  /></td><td><input type="reset" /></td></tr>
			</table>
		</form>
		<p>Already Have Account? Then <a href="index.php"> LOGIN </a></p>
	</div>
</body>
</html>
