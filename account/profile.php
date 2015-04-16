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
			<h3>Please make any changes below</h3>
			<form id="detailsForm" method="post">
				<label for="fname" style="width:25%;text-align:left;">First Name</label><br>
				<input type="text" name="fname" id="fname" placeholder="First Name" required/><br>
				<label for="lname" style="width:25%;text-align:left;">Last Name</label><br>
				<input type="text" name="lname" id="lname" placeholder="Surname" required/><br>
				<label for="email" style="width:25%;text-align:left;">Email address</label><br>
				<input type="email" name="email" id="email" placeholder="Email" required/><br>
				<label for="bio" style="width:50%;text-align:left;">All about you...</label><br>
				<textarea name="bio" id ="bio" maxlength="1000" cols="50" rows="10"></textarea><br>
				<button type="button" onclick="checkIfValid('update')">update</button>
			</form>
			<div id="notLoggedin">
				<p>You are not logged in.</p>
			</div>
		</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '../includes/footer.php';?>
	</footer>
</div>
<script>
	if(localStorage.getItem('loggedOn') !== null){
		var notlogged = document.querySelector("#notLoggedin");
		notlogged.style.display = "none";
		getdetails();
	} else {
		var updateform = document.querySelector("#updateForm");
		updateform.style.display = "none";
	}
</script>
</body>
</html>
