<!DOCTYPE html>

<html>
<head>
	<title>Registration</title>

	<style>
		body{
			background-image:url(mini.jpg);
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
			margin: 3px;
			padding: 5px;

		}
</style>
</head>
<body>
	<div class = "container">
		<form action= "insert.php" method = "POST">
			<h2 class = "form_header">Register</h2>
			<input type="text" name= "fname" placeholder= "First Name" required>
			<input type="text" name= "lname" placeholder= "Last Name" required>
			<input type="email" name= "email" placeholder= "Email" required>
			<input type="text" name= "username" placeholder= "Username" required>
			<input type="text" name= "address" placeholder= "Address" required>
			<input type="date" name= "birthday" placeholder= "birthday" required>
			<input type="password" name= "pass" placeholder= "Enter Password" minlegnth="8"  required>
			<input type="submit" value= "Register">
		</form>

	</div>

</body>
</html>