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
			<h1>Equipment</h1>
			<div  style="background-image:url(../images/ringsThumb.jpg);">
			<div class="item">
				<!--<img src="../images/rings.jpg" height="200" width="200">-->
				<h2><a href="rings.php">Gymnastic Rings</a></h2>
				<p>The ultimate upper-body strength training tool.</p>
				<a href="rings.php">View full details.</a>
			</div>
			</div>
			<div style="clear:both"></div>
			<h2>Voodoo floss</h2>
			<p>description and price...</p>
			<a href="#">Some Link or other...</a>
			<h2>laccross balls</h2>
			<p>description and price...</p>
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
