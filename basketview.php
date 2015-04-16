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
		</div>
	</div>
	<div style="clear:both"></div>
	<div id="main">
		<?php include '/includes/navigation.php';?>
		<div id="maincontainer">
			<h2>Your Basket</h2>
<?php 
session_start();
include('includes/BasketItem.php');
if(!isset($_SESSION['basketItems'])) {
	echo 'Your basket is empty';
} else {
	$array = $_SESSION['basketItems'];
	$sum = 0;
	$table = '<table id="baskettable" style="border-collapse:separate;empty-cells:hide;">
				<tr>
					<th>Product</th><th>Price</th>
				</tr>';
	while(list($key, $val) = each($array)){
		$item = unserialize($val);
		$sum += $item->price;
		$table .= '<tr><td>'.$item->product.'</td><td> &pound'.$item->price.'</td><td><button title="Remove from basket" onclick="discard('.$key.')">-</button></td></tr>';
	}
	
	$table .= '<tr><td></td><td> &pound'.$sum.'</td></tr></table>';
	echo $table . '<br><button type="button" onclick="saveitems()">Purchase Items</button>';
}
?>
		</div>
	</div>
	<div style="clear:both"></div>
	<footer id="footer">
		<?php include '/includes/footer.php';?>
	</footer>
</div>

</body>
</html>
