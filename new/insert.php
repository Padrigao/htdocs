<?php
	include 'conn.php';

	$username = $_POST ['username'];
	$pass = $_POST ['pass'];
	$confirm = $_POST ['confirm'];

	if($pass == $confirm)
	{
		$query = "INSERT INTO notes_tbl (username, pass) VALUES ('$username', '$pass')";

	         try{
	         	$result =$conn->query($query);

	         	if($result){
	         		echo "<script>
	         		alert('Successful')
	         		window.location.href ='loginindex.php'
	         		</script>";
	         	}

	         }catch(Exception $e){
	         	echo "<script> alert ('Failed')
	         	window.location.href = 'register.php'
	         	</script>";
	         }
	}
	else{
			echo "<script> alert('Password is not Matched Please Try Again')
		window.location.href ='register.php'
		 </script>";

	}
?>