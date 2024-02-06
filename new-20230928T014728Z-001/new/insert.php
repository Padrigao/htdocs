<?php
	include 'conn.php';

	$fname = $_POST ['fname'];
	$lname = $_POST ['lname'];
	$email = $_POST ['email'];
	$address =$_POST['address'];
	$birthday = $_POST['birthday'];
	$username = $_POST ['username'];
	$pass = $_POST ['pass'];

	$query = "INSERT INTO tion_tbl (username, pass, fname, lname, email, birthday, address) VALUES ('$username', '$pass', '$fname', '$lname', '$email', '$address', '$birthday')";

	$result = $conn->query($query);

	if ($result){

		echo "<script> alert('Successful')
		window.location.href ='loginindex.php'
		 </script>";
	}else{
		echo "<script> alert('Failed')
		window.location.href ='register.php'
		 </script>";
			
		}
?>