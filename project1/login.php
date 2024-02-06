<?php

	session_start();

	include "conn.php";

	$admin = $_POST['ladmin'];
	$pass = $_POST['lpass'];

	$msg = [];

	$sql = " SELECT * FROM trf_acc WHERE `admin` = '$admin' AND `pass` = '$pass';";

	$query = $con->query($sql);


    if ($query->num_rows > 0){
        $row = $query->fetch_assoc();
        
        $_SESSION['ladmin'] = $row['admin'];
		$_SESSION['lpass'] = $row['pass'];
    
        $msg['status']= true;
        $msg['message']="Successful";
    
    }else{
         $msg['status']= false;
         $msg['message']="Failed";
    }

	echo json_encode($msg);
 
?>