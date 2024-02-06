<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>register</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="function.js"></script>
</head>
<body>
<form id="register">
    <div><label>Username</label></div>
        <input type="Text" id="rname" name="rname">
        <div><label>First Name</label></div>
        <input type="Text" id="rfuser" name="ruser">
        <div><label>Last name</label></div>
        <input type="Text" id="rluser" name="rluser">
        <div><label>Address</label></div>
        <input type="Text" id="aduser" name="aduser">
        <div><label>Password</label></div>
        <input type="Text" id="rpass" name="rpass">
        <div><label>id</label></div>
        <input type="Text" id="rpass" name="rpass">

        <button type="submit" id="rsub">register</button>
    </form>

    <h3 id="rresponse">see register status here</h3>


    <form id="login">
        <div><label>username</label></div>
        <input type="Text" id="luser" name="luser">
        <div><label>password</label></div>
        <input type="Password" id="lpass" name="lpass">
        <button type="submit" id="lsub">login</button>
    </form>

    <h3 id="lresponse">see login status here</h3>
    

</body>
</html>