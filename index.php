<?php
// Start the session
session_start();
?>
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
			<?php echo "Session variables are " . print_r($_SESSION)?>
			<div id="marker"></div>
			<button type="button" onclick="whologgedon()">Check localStorage</button>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Su0vLwyQTTI" frameborder="0" allowfullscreen></iframe>
			<p>Here you will find everything you need to get moving! From parkour to gymnastic strength to the subtleties of the Feldenkrais method.
			Check out our <a href="courses">courses</a> page to see what's available and get started! <br>For an overview of our philosophy and approach, 
			have a look at our <a href="about.html">bio</a>.
			</p>
		</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '/includes/footer.php';?>
	</footer>
</div>

</body>
</html>
