<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ticketing system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <script type="text/javascript" src="jquery.js"></script> -->
</head>
<body>
	<form action="backend.php" id=register method = "POST">
		<div class="div1">
			<h2>THE CITY OF COMMON SENSE<br> AND THE STATE OF SANITY</h2>
			<h1>TICKETING SYSTEM</h1>

			<div class="div2">
				<label class="lbl1">Violator: <input type="text" name="rvio" class="input0" id="rvio" required></label><br>
				<label class="lbl1">Date: <input type="date" name="rdate" class="input0" id="rdate" required></label><br>
				<label class="lbl1">Time: <input type="time" name="rtime" class="input0" id="rtime" required></label>
			</div>


 			<label class="lbl2">License Plate #: 
			<input type="text" name="rlp" class="input1" id="rlp"required></label><br>

			<label class="lbl2">Location:
			<input type="text" name="rloc" class="input1" id="rloc"required></label><br>

 			<h3>OFFENSE(S)</h3>


			<div class="div3">
				<label class="lbl2">
				<input type="text" name="roff" class="input2" id="roff"required></label>
			</div>

			<div class="div4">
				<label class="amount"> Amount
				<input type="text" name="ramt" class="input2" id="ramt"required></label>
			</div>

			<button type="submit" id="rsub" name="rsub" class="submit">Submit</button>
		
		</div>
	</form>
	<!-- <script type="text/javascript" src="functions.js"></script> -->

</body>
</html>