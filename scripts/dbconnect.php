<?php


	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="movement";
	try {
		$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		//set PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//return $conn;
	} catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}


?>