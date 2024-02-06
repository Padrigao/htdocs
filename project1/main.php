<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h2><?php echo $_SESSION['fname'], " 
	" ,$_SESSION['lname']," " ,$_SESSION['add'];?></h2>

</body>
</html>