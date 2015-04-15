<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Movement - just move...</title>
	<link rel="stylesheet" href="../css/structure.css" type="text/css" />
	<link rel="stylesheet" href="../css/navigation.css" type="text/css" />
	<script src="../scripts/jquery-1.9.1.js"></script>
	<script src="../scripts/move.js"></script>
</head>
<body>
<div id="container">
	<div id="header">
		<a href="/movement" id="logo"><div>
			<h1>MOVEMENT</h1>
			<h4>Start yours...</h4>
		</div></a>
		<div id="topright">
		<?php include '../includes/login.php';?>
		<?php include '../includes/basket.php';?>
		</div>
	</div>
	<div style="clear:both"></div>
	<div id="main">
		<?php include '../includes/navigation.php';?>
		<div id="maincontainer">
			<h1>Courses</h1>
			<h2>Handstands</h2>
			<p>Course synopsis...</p>
			<a href="#">Some Link or other...</a>
			<h2>Parkour Foundations</h2>
			<p>Course synopsis...</p>
			<a href="#">Some Link or other...</a>
			<h2>Gymnastic Rings</h2>
			<p>Course synopsis...</p>
			<a href="#">Some Link or other...</a>
			
		</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '../includes/footer.php';?>
	</footer>
</div>

</body>
</html>
