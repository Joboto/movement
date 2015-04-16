<h2>Your Basket</h2>
<?php 
session_start();
include('BasketItem.php');
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