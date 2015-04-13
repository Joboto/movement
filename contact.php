<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Movement - just move...</title>
	<link rel="stylesheet" href="css/structure.css" type="text/css" />
	<link rel="stylesheet" href="css/navigation.css" type="text/css" />
	<script src="scripts/jquery-1.9.1.js"></script>
	<script src="scripts/move.js"></script>
</head>
<body>
<div id="container">
	<div id="header">
		<a href="#" id="logo"><div>
			<h1>MOVEMENT</h1>
			<h4>Start yours...</h4>
		</div></a>
	<?php include '/includes/login.php';?>
	</div>
	<div style="clear:both"></div>
	<div id="main">
		<?php include '/includes/navigation.php';?>
		<div id="maincontainer">
			<form name="contactForm" method="post" action="scripts/contact.php">
				<label for="name" style="width:25%;text-align:left;">Name</label><br>
				<input type="text" name="name" /><br>
				<label for="email" style="width:25%;text-align:left;">Email address</label><br>
				<input type="email" name="email"/><br>
				<label for="comments" style="width:25%;text-align:left;">Comments</label><br>
				<textarea name="comments" maxlength="1000" cols="50" rows="10"></textarea><br>
				<input type="Submit" value="Submit"/>
			</form>
		</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '/includes/footer.php';?>
	</footer>
</div>

</body>
</html>
