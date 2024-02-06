<?php
	session_start();

	include "conn.php";

	$vio = $_POST['rvio'];
	$date = $_POST['rdate'];
	$time = $_POST['rtime'];
	$lp = $_POST['rlp'];
	$loc = $_POST['rloc'];
	$off = $_POST['roff'];
	$amt = $_POST['ramt'];


	$msg = [];

	$query = "INSERT INTO `records` (`violator`,`date`, `time` , `lp`, `location`, `offense`,`amount`) VALUES ('$vio','$date','$time' , '$lp', '$loc', '$off','$amt');";

	try {
    	$result = $con->query($query);
    	
        if($result){
         echo "<script>
            alert('Successful')
            window.location.href = 'front.php'
        </script>";

        }
            
    }catch(Exception $e){
        echo "Failed";
    
    
    }

?>