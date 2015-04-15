<div id="basketbox">
	<a href="/movement/basketview.php">
<?php 
session_start();
if(!isset($_SESSION['basketItems'])) {
	echo 'Your basket is empty';
} else {
	echo 'There are ' . count($_SESSION['basketItems']) . ' items in your basket.';
}
?>
	</a>
</div>