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
				<h1>Gymnastic Rings</h1>
				<p>The 1.11" FIG Wood Rings meet the FIG (Federation International Gymnastics) standards.  Includes a pair of 1.11" Wood Rings and marked straps.<br>
				Ring thickness:1.11" (Gymnastic standard)<br>
				Ring weight: 9.5oz<br>
				Outer Diameter: 23.5cm (9.25 inches)<br>
				Length of Straps: 18'<br>
				Width of Straps: 1.5"</p>
				<img src="../images/ringsThumb.jpg" style="max-width:100%">
				<p>&pound;55.00</p>
				<button type="button" onclick="addtobasket('Gymnastic Rings', 55)">Add to Basket</button>
			</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '../includes/footer.php';?>
	</footer>
</div>

</body>
</html>
