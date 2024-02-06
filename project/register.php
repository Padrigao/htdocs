<?php
    session_start();
    
    include 'conn.php';

    $uname = $_POST['ruser'];
    $pass = $_POST['rpass'];
    $fname = $_POST['rfname'];
    $lname = $_POST['rlname'];
    $add = $_POST['radd'];


    $msg = [];

    $sql = "INSERT INTO `account_table`(`username`,`pass`) VALUES ('$uname','$pass');";
    

    $query = $con->query($sql);

    if($query == true){
        $sql1 = "SELECT * FROM `account_table` WHERE `username` = '$uname';";

        $query1 = $con->query($sql1);

        if($query1->num_rows > 0){
            $row = $query1->fetch_assoc();
            $id = $row['user_id'];

            $sql3 = "INSERT INTO `personal information`(`user_id`, `fname`, `lname`, `address`) VALUES ('$id','$fname','$lname','$add');";
            
            $query2 = $con->query($sql3);
        }
        $msg['status'] = true;
        $msg['message'] = "Successful";
    }else{
        $msg['status'] = false;
        $msg['message'] = "Failed";
    }
    echo json_encode($msg);

?>