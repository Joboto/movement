<?php

class BasketItem {
	public $product;
	public $price;
	
	public function __construct($someProd, $somePrice){
		$this->product = $someProd;
		$this->price = $somePrice;
	}
}

?>