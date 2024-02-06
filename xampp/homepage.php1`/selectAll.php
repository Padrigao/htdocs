<?php
    include"conn.php";

    $query = "SELECT * FROM tbl_user";

    $result = $conn->query($query);

    if($result->num_rows > 0){
        //output data from each row
        while($row = $result->fetch_assoc()) {
            echo "username: ".$row['user_name'];
            echo "<br>";    
            echo "Name: ".$row['fname'].''.$row['lname'];
            echo "<br>";
            echo "Phone Number: ".$row['phone_num'];
            echo "<br>"
            echo "<br>"
        }
    }