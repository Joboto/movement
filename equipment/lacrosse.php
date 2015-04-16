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
				<h1>Lacrosse Balls</h1>
				<p>If there's one thing you should implement to increase mobility, it's a lacrosse ball. It's great for breaking up muscle knots and hard to reach trigger points. Use the Lacrosse ball on your traps and delts after a heavy upper body workout or on glutes and calves after a long run.</p>
				<ul>
				<li>Weight: 5 oz.</li>
				<li>Diameter: 2.54"</li>
				<li>Material: Rubber</li>
				</ul>
				<img src="../images/voodooFloss.jpg" style="max-width:100%">
				<p>&pound;24.00 per pair</p>
				<button type="button" onclick="addtobasket('Lacrosse Balls', 3.99)">Add to Basket</button>
			</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '../includes/footer.php';?>
	</footer>
</div>

</body>
</html>
