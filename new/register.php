<!DOCTYPE html>

<html>
<head>
	<title>Registration</title>
	
	<style>

		body{
			background-color: white;
			background-size:cover;
		}

		div{
			width: 25vw;
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
		<form action= "insert.php" method = "POST">
			<h2 class = "form_header">Register Your Account</h2>
			<input type="text" name= "username" placeholder= "Username" required>
			<input type="password" name= "pass" placeholder= "Enter Password" minlegnth="8"  required>
			<input type="password" name="confirm" placeholder="Confirm Your Password" minlength="8" required>
			<input type="submit" value= "Register">
		</form>

	</div>

</body>
</html>