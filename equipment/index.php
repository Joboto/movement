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
			<div class="item" onmouseover="clearBackground(this)">
				<h2><a href="rings.php">Gymnastic Rings</a></h2>
				<p>The ultimate upper-body strength training tool.</p>
				<a href="rings.php">View full details.</a>
			</div>
			</div>
			<div style="clear:both"></div>
			
			<div  style="background-image:url(../images/voodooFloss.jpg);">
			<div class="item">
				<h2><a href="voodoo.php">Voodoo Floss</a></h2>
				<p>One of the best recovery tools.</p>
				<a href="voodoo.php">View full details.</a>
			</div>
			</div>
			<div style="clear:both"></div>
			
			<div  style="background-image:url(../images/lacrosseBalls.jpg);">
			<div class="item">
				<h2><a href="lacrosse.php">lacrosse Balls</a></h2>
				<p>The simplest way to increase mobility.</p>
				<a href="lacrosse.php">View full details.</a>
			</div>
			</div>
			
		</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '../includes/footer.php';?>
	</footer>
</div>

</body>
</html>
