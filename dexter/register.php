<?php
    session_start();

    include "conn.php";

    $uname=$_POST['ruser'];
    $pass=$_POST['rpass'];
    $id1=$row['id'];

    $msg=[];

    $sql="INSERT INTO 'account_table' ('username', 'password', 'name', hobby) VALUES ('$uname', '$pass', '$name', 'hobby);";

    $query=$con->query($sql);



    if($con->query($sql)==TRUE){
        $msg['status'] = TRUE;
        $msg['message'] = "successful";
    }else{
        $msg['status'] = FALSE;
        $msg['message'] = "failed";
    }

    echo json_encode($msg);

?>