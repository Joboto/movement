<div id="basketbox">
	<a href="/movement/basketview.php">
<?php 
session_start();
if(!isset($_SESSION['basketItems'])) {
	echo 'Your basket is empty';
} else {
	switch(count($_SESSION['basketItems'])){
	case 0:
		echo 'Your basket is empty';
		break;
	case 1:
		echo 'There is 1 item in your basket.';
		break;
	default:
		echo 'There are ' . count($_SESSION['basketItems']) . ' items in your basket.';
	}
}
?>
	</a>
</div>