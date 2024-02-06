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
        height:50%;
        width:20%;
        margin-left:40%;
        border-style:solid;
        border-width: 5px;
        margin-top:8%;
        border-radius:10px;
        
    }
    div{
        margin-left:43%;
    }
    input{
        margin-left:28%;
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
    }

</style>
<body>
    <form id = "login">
        <div><label>Username</label></div>

        <input type="text" id = "luser" name ="luser">

        <div><label>Password</label></div>

        <input type="password" id = "lpass" name ="lpass">
        <br>
        <button type = "submit" id ="lsub"> Login </button><br>

    </form>
    <h3 id = "lresponse">Login Here</h3>


    
    
</body>
</html> 