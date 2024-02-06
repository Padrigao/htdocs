<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logreg_sample</title>
    
    <script type ="text/javascript" src="jquery.js"> </script>
    <script type ="text/javascript" src="functions.js"> </script>
</head>
<style>
    body{
        background-color:pink;
    }
    form{
        text-align: center;
        height:50%;
        width:20%;
        margin-left:40%;
        border-style:solid;
        border-width: 5px;
        margin-top:8%;
        border-radius:10px;
        
    }
    div{
        margin-left:5%;
    }
    input{
        margin-left:5%;
    }


    h3{
        text-align:center;
    }
    button{
        background-color:cyan;
        border-radius:5px;
        margin-left:43%;
        margin-top:5%;
        margin-bottom:2%;
        text-align: center;
    }

</style>
<body>
    <form id = "register">

        <div><label>Username</label></div>
        <input type="text" id = "ruser" name ="ruser">

        <div><label>Password</label></div>
        <input type="password" id = "rpass" name ="rpass">

        <div><label>First Name</label></div>
        <input type="text" id = "rfname" name ="rfname">

        <div><label>Last Name</label></div>
        <input type="text" id = "rlname" name ="rlname">

        <div><label>Address</label></div>
        <input type="text" id = "radd" name ="radd">

        <br>
        <button type = "submit" id ="rsub"> Register </button>
        <button><a href="login.php">Already Log In?</a></button>


    </form>
    <h3 id = "rresponse">Register Response Here</h3>


