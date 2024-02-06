<html>
<head>
    <style>
    div{
        width: 25vw;
        margin: 0 px auto;
        padding: 10px;

    }

    form{
        border: 10 px solid black;
        padding: 20 px;
        text-align: center;
        margin: 0;
    }

    input{
        width: 75%;
        margin: 3 px;
        padding: 5 px;
    }
    </style>
</head>
<body>
    <div class= "content">
        <form action="insert.php" method="POST">
            <h1 class = "form_header">Registration Form</h1>
            <input type="text" name="fname" placeholder="First Name">
            <input type="text" name="lname" placeholder="Last Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="phone_num" placeholder="Phone Number">
            <input type="text" name="user_name" placeholder="Username">
            <input type="password" name="pass" placeholder="Enter New Password">
            <input type="submit" value="Register">
        </form>

        <form action="login.php" methods="post">
            <h2 class="form_header">Login</h2>
            <input type="text" name="user_name" placeholder="Username">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" value="Login">
        </form>

    </div>
</body>
</html>



