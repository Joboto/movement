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
		<a href="/movement" id="logo"><div>
			<h1>MOVEMENT</h1>
			<h4>Start yours...</h4>
		</div></a>
		<div id="topright">
		<?php include '/includes/login.php';?>
		<?php include '/includes/basket.php';?>
		</div>
	</div>
	<div style="clear:both"></div>
	<div id="main">
		<?php include '/includes/navigation.php';?>
		<div id="maincontainer">
			<h1>Links</h1>
			<p>Here are some links to some other awesome websites...</p>
			<dl>
				<dt>The Movesmart Podcast</dt>
				<dd><a href="http://wellroundedathlete.net/category/podcast/">wellroundedathlete.net<a/></dd>
				<dt>Ido's Portal</dt>
				<dd><a href="http://www.idoportal.com/">idoportal.com</a></dd>
				<dt>Gymnastics WOD</dt>
				<dd><a href="http://gymnasticswod.com/">gymnasticswod.com</a></dd>
				<dt>The Feldenkrais Store</dt>
				<dd><a href="https://www.achievingexcellence.com/">gymnasticswod.com</a></dd>
			</dl>
		</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '/includes/footer.php';?>
	</footer>
</div>

</body>
</html>
