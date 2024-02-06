<?php
    session_start();

    include "conn.php";

    $uname=$_POST['luser'];
    $pass=$_POST['lpass'];

    $msg=[];

    $sql="SELECT * FROM logreg WHERE username='$uname' AND  pass='$pass';";

    $query=$con->query($sql);

    if($con->query($sql)==TRUE){
        $msg['status'] = TRUE;
        $msg['message'] = "successfuly login";
    }else{
        $msg['status'] = FALSE;
        $msg['message'] = "login failed";
    }

    echo json_encode($msg);

?>