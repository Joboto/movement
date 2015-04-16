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
			<div class="item">
				<h1>Voodoo Floss</h1>
				<p>The Voodoo Floss Band is an essential performance tool and should be a staple in the gym bag of every athlete looking to improve range, restore joint mechanics, or unglue matted down or previously injured tissue.  Compression tack and flossing (Voodoo Flossing) works on many levels; including re-perfusing tissues that have become stiff or gone cold after injury, and by compressing swelling out of tissues and joints.</p>
				<ul>
				<li>Length: 7' (Gymnastic standard)</li>
				<li>Width: 2"</li>
				<li>Material: Natrual Latex Rubber</li>
				<li>Max Stretch: 150% of length</li>
				</ul>
				<img src="../images/voodooFloss.jpg" style="max-width:100%">
				<p>&pound;24.00</p>
				<button type="button" onclick="addtobasket('Voodoo Floss', 24)">Add to Basket</button>
			</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '../includes/footer.php';?>
	</footer>
</div>

</body>
</html>
