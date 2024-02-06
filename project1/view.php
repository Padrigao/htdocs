<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Record</title>
    <link rel="stylesheet" href="view.css">
</head>
<body>
    <form action="backend.php" id=register method = "POST">
        <main class="table">
            <section class="table__header">
                <h1>Records</h1>
            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Violators <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Time <span class="icon-arrow">&UpArrow;</span></th>
                            <th> License Plate <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Offense <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Amount <span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include "conn.php";
                    
                        $sql1 = " SELECT * FROM records;";
                    
                        $query = $con->query($sql1);
                    
                        if ($query->num_rows > 0){
                            while ($row = $query->fetch_assoc()){
                                echo "<tr>
                                <td>".$row['id']."</td>
                                <td>".$row['violator']."</td>
                                <td>".$row['date']."</td>
                                <td>".$row['time']."</td>
                                <td>".$row['lp']."</td>
                                <td>".$row['location']."</td>
                                <td>".$row['offense']."</td>
                                <td>".$row['amount']."</td>
                                </tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </section>
        </main>
    </form>
</body>
</html>