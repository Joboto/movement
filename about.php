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
			<h2>Purpose</h2>
			<p>This website is for a company which offers skills and strength training in various physical disciplines including gymnastics and parkour.
			The website will sell courses and a equipment to customers to aid their development.
			New customers will create an account where they will be able to view any purchases they make. Once a course has been purchased the relevant videos and instructions for the course will be made visible to the customer. They will also have space to upload videos of themselves performing the exercises for the company coaches to view in order to assess and give feedback.</p>
			
			<h2>Functional Requirements</h2>
			<table>
			<tr><th>Name</th><th>Store Customer Details</th></tr>
			<tr><td>Summary</td><td>Customers will be able to create a personal account. This will store their personal details and their purchase history.It will also store any comments or videos they upload on their progression with the courses they have purchased</td></tr>
			<tr><td>Requirements</td><td>The application will have access to a database where customer details, purchase history and videos and notes on progression with exercises can be stored.<br>There will be a 'basket' facility which will record all the items to be purchased in a given session. This could also be stored for future sessions if the customer logs out before making payment.</td></tr>
			</table>
			<br>
			<table>
			<tr><th>Name</th><th>Provide Secure log-in</th></tr>
			<tr><td>Summary</td><td>Customers will be able to log on to their own accounts where they will be able to view the course material for which they have paid. They will also be able to update their personal details held on record.</td></tr>
			<tr><td>Requirements</td><td>When logging on, a customers details will be validated against what is stored on the database. A valid log on will then direct the customer to a secure section of the website.</td></tr>
			</table>
			<br>
			<table>
			<tr><th>Name</th><th>Retain Customer Purchase History</th></tr>
			<tr><td>Summary</td><td>A record will be kept of any courses or equipment purchased by a customer. Once logged on, a customer will then be able to view their purchase history and be able to access course material for any course they have purchased.</td></tr>
			<tr><td>Requirements</td><td>Purchase history will be stored on the database. The secure section of the website will provide access to course material.</td></tr>
			</table>
			<br>
			<table>
			<tr><th>Name</th><th>Process Payments</th></tr>
			<tr><td>Summary</td><td>Customers will be able to purchase products directly from the website which will then be posted to the customer's home address.</td></tr>
			<tr><td>Requirements</td><td>The application will have access to an online payment facility for processing purchases.</td></tr>
			</table>
			<br>
			
			<h2>Folder Structure</h2>
			<img src="images/folderStructure.png" alt="folderStructure.png" title="Folder Structure" />
		</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '/includes/footer.php';?>
	</footer>
</div>

</body>
</html>
