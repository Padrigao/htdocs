<?php
    session_start();

    include 'conn.php';


    $uname = $_POST['luser'];
    $pass = $_POST['lpass'];

    $msg = [];

    $sql = "SELECT * FROM `personal_information` as `pi` , `account_table` as `at` WHERE `at`.`username` = '$uname' AND `at`.`pass` = '$pass' AND `at`.`user_id` = `pi`.`user_id`;";
    // $sql = "SELECT * FROM `logreg` WHERE `username` = '$uname' AND `pass` = '$pass';";

    $query = $con->query($sql);

    if($query->num_rows > 0){
        $row = $query->fetch_assoc(); 
        $_SESSION['fname'] = $row ['fname'];
        $_SESSION['lname'] = $row ['lname'];
        $_SESSION['address'] = $row ['address'];

        $msg['status'] = true;
        $msg['message'] = ("Welcome"." ".$row['fname']." ".$row['lname']." ".$row['address']);
        
    }else{
        $msg['status'] = false;
        $msg['message'] = "Failed";
    }

    echo json_encode($msg);
?>