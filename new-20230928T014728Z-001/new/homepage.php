<?php 

	session_start();
	if (!isset($_SESSION['username'])){
		header("Location: loginindex.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homepage</title>

</head>
<style>
	body{
		background-image: url(mini.jpg);
		background-size: cover;
		font color: pink;
	}
	form{
		text-align: center;
	}
		div{
			width: 25vw;
			margin: 0px auto;
			padding:10px;
		}
		}
		input{
			width: 75%;
			margin: 3px;
			padding: 5px;
</style>

<body>
	<form action = "loginindex.php" method="POST">
		
	<h1>Welcome User <?php echo $_SESSION['username'] ?></h1>
	<img src="<?php echo $_SESSION['profile_pic'] ?>" alt="">
	<h2><?php echo $_SESSION['fname'] . " ". $_SESSION['lname'] ?></h2>
	<a href="logout.php"> Logout</a>
	</form>
	<form action ="upload.php" method ="post" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="fileToUpload" id="fileToUpload" acccept="image/*"><br>
		<input type="submit"  value="Upload picture" name="Submit">
		
	</form>
</body>
</html>