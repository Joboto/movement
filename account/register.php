<!DOCTYPE html>
<html>
<head>
	<title>Movement - just move...</title>
	<link rel="stylesheet" href="../css/structure.css" type="text/css" />
	<link rel="stylesheet" href="../css/navigation.css" type="text/css" />
	<script type="text/javascript" src="../scripts/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="../scripts/move.js"></script>
</head>
<body>
<div id="container">
	<div id="header">
		<a href="../" id="logo"><div>
			<h1>MOVEMENT</h1>
			<h4>Start yours...</h4>
		</div></a>
	<?php include '../includes/basket.php';?>
	</div>
	<div style="clear:both"></div>
	<div id="main">
		<?php include '../includes/navigation.php';?>
		<div id="maincontainer">
			<form id="detailsForm" method="post">
				<label for="fname" style="width:25%;text-align:left;">First Name</label><br>
				<input type="text" name="fname" id="fname" placeholder="First Name" required/><br>
				<label for="lname" style="width:25%;text-align:left;">Last Name</label><br>
				<input type="text" name="lname" id="lname" placeholder="Surname" required/><br>
				<label for="email" style="width:25%;text-align:left;">Email address</label><br>
				<input type="email" name="email" id="email" placeholder="Email" required/><br>
				<label for="username" style="width:50%;text-align:left;">Choose a unique User Name</label><br>
				<input type="text" name="username" id="username" placeholder="Username" required/><br>
				<label for="password" style="width:25%;text-align:left;">Create password</label><br>
				<input type="password" name="password" id="password" placeholder="Password" required/><br>
				<input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password"/><br>
				<label for="bio" style="width:50%;text-align:left;">Tell us a little bit about yourself...</label><br>
				<textarea name="bio" id ="bio" placeholder="Bio" maxlength="1000" cols="50" rows="10"></textarea><br>
				<button type="button" id="button" onclick="checkIfValid('register')">Submit</input>
			</form>
		</div>
		<ul id="thing"></ul>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '../includes/footer.php';?>
	</footer>
</div>

</body>
</html>
