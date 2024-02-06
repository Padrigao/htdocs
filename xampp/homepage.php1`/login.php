<?php
    include 'conn.php';

    $user_name = $_POST['user_name'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM tbl_user WHERE user_name = '$user_name'";

    $result = $conn->query($query);

    if($result->num_rows > 0){
        echo "Login Successfully"
    }