<?php
include 'conn.php';
session_start();

$username = $_POST['username'];
$pass = $_POST['pass'];

$query = "SELECT * FROM tion_tbl WHERE username = '$username' AND pass = '$pass'";

$result =$conn->query($query);
if ($result->num_rows > 0){
	$row =$result->fetch_row();

	$_SESSION['username'] =$row[0];
	$_SESSION['fname'] =$row[1];
	$_SESSION['lname'] =$row[2];

	if(!empty($row[7])) {
		$_SESSION['profile_pic'] = $row[7];
	}


	echo "<script> alert('success')
	window.location.href = 'homepage.php'

	</script>";
}else{
	echo "<script> alert('failed')
	window.location.href ='loginindex.php'

	</script>";
}
 ?>