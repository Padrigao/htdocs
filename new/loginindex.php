<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body{
			background-color: white;
			background-size: cover;
		}

		div{
			width:25%;
			margin: 0px auto;
			padding:10px;
		}

		form{
			border:1px solid black;
			border-radius: 10px;
			text-align: center;
			margin: 3px;

		}
		input{
			width: 75%;
			margin: 25px;
			padding: 15px;

		}
</style>
</head>
<body>
	<div class = "container">
		<form action="login.php" method = "POST">
			<h2 class = "form_header">Login Your Account</h2>
			<input type="text" name= "username" placeholder= "Username">
			<input type="password" name= "pass" placeholder= "Password">
			<input type="submit" value= "Login">
		</form>

</body>
</html>