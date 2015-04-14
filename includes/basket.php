<?php 
session_start();
if(!isset($_SESSION['basketItems']))
	echo 'Your basket is empty';
?>