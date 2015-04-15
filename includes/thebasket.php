<h2>Your Basket</h2>
<?php 
session_start();
include('BasketItem.php');
if(!isset($_SESSION['basketItems'])) {
	echo 'Your basket is empty';
} else {
	$array = $_SESSION['basketItems'];
	$list = "";
	foreach ($array as $bitem) {
		$item = unserialize($bitem);
		$list .= '<li>'.$item->product.' '.$item->price.'</li>';
	}
	echo '<p>There are ' . count($array) . ' items in your basket.</p>' . $list . '<button type="button" onclick="clearsession()">Empty basket</button>';
}
?>