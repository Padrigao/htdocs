<?php
    include 'conn.php';

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone_num=$_POST['phone_num'];
    $username=$_POST['user_name'];
    $pass=$_POST['pass'];

    $query = "INSERT INTO tbl_user (user_name, user_pass, fname, lname, email, phone_num) VALUES('$username', '$pass', '$fname', '$lname', '$email', '$phone_num')";

    try{
        $result = $conn->query($query);

        if ($result){
            echo "Successful";
        }

    }catch(Exception $e){
        echo "Failed";
    }
?>