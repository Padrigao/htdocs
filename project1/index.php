<?php

	session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="login.css">
	<script type="text/javascript" src="jquery.js"></script>
	<title>
		Login Page!
	</title>
</head>
<body>
	<div class="login">
		<h2>Login</h2>
		<form id="login">
			<div class="ubox">
				<input type="text" id= "ladmin" name="ladmin"  required>
				<label for="ladmin">Username</label>
			</div>
			<div class="ubox">
				<input type="password" id="lpass" name="lpass" required>
				<label for="lpass">Password</label>
			</div>
			<h3 id=lresponse></h3>
			<button type="submit" id="lsub" name="lsub">Submit</button>
			<!-- <p>Click <a href="register.php">here</a> to register</p> -->
		</form>

	</div>
	<script type="text/javascript" src="functions.js"></script>
</body>
</html>