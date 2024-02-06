<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pay.css">

</head>
<body>
<div class="container">
    <form action="backend.php" id=register method = "POST">
        <div class="row">
            <div class="col">
                <h3 class="title">OFFENSE RECORD </h3>
                <div class="inputBox">
                    <span>Violators Name:</span>
                    <input type="text" name="rvio" id="rvio" placeholder="cjqt" required>
                </div>
                <div class="inputBox">
                    <span>Date :</span>
                    <input type="date" name="rdate" id="rdate" placeholder="mm/dd/yyyy" required>
                </div>
                <div class="inputBox">
                    <span>Time :</span>
                    <input type="time" name="rtime" id="rtime" placeholder="" required>
                </div>
                <div class="inputBox">
                    <span>License Plate :</span>
                    <input type="text" name="rlp" id="rlp" placeholder="mumbai" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Location :</span>
                        <input type="text" name="rloc" id="rloc" placeholder="india" required>
                    </div>
                    <div class="inputBox">
                        <span>Offense :</span>
                        <input type="text" name="roff" id="roff" placeholder="mekus" required>
                    </div>
                    <div class="inputBox">
                        <span>Amount :</span>
                        <input type="text" name="ramt" id="ramt" placeholder="123 456" required>
                    </div>
                </div>

            </div>
        </div>
        <button type="submit" id="rsub" name="rsub" class="submit-btn">Submit</button>
    </form>
</div>    
</body>
</html>