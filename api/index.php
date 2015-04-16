<?php
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
 
$app->post('/getmember', 'grabamember');
$app->post('/newmember', 'regNew');
$app->post('/updateme', 'updateMember');
$app->get('/:product/:price', 'addToBasket');
$app->get('/:akey', 'removeFromBasket');
$app->get('/killsession', 'clearSession');

$app->run();


function clearSession(){
	//session_start();
	session_unset();
	session_destroy();
	unset($_SESSION['basketItems']);
	session_start();
}

function addToBasket($product, $price){
	include('../includes/BasketItem.php');
	session_start();
	$newItem = new BasketItem($product, $price);
	if(!isset($_SESSION['basketItems'])) {
		$_SESSION['basketItems'] = array();
	}
	$_SESSION['basketItems'][] = serialize($newItem);
	$count = count($_SESSION['basketItems']);
}

function removeFromBasket($akey){
	session_start();
	unset($_SESSION['basketItems'][$akey]);
}

function regNew() {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$uname = $_POST['username'];
	$pword = $_POST['password'];
	$bio = $_POST['bio'];
	$sql = "INSERT INTO members (fname, lname, email, pword, username, bio) VALUES (:fname, :lname, :email, :uname, :pword, :bio)";
	$conn = dbconnect();
	try {
		$stmt = $conn->prepare($sql);
		$stmt->bindParam("fname", $fname);
		$stmt->bindParam("lname", $lname);
		$stmt->bindParam("email", $email);
		$stmt->bindParam("uname", $uname);
		$stmt->bindParam("pword", $pword);
		$stmt->bindParam("bio", $bio);
		$stmt->execute();
		echo json_encode(array("fname"=>$fname,"lname"=>$lname,"email"=>$email,"bio"=>$bio,"username"=>$uname),JSON_FORCE_OBJECT);
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
}

function grabamember() {
	$email = $_POST['email'];
	$pword = $_POST['password'];
	$sql = "SELECT * FROM members WHERE (email=:email && pword=:pword)";
	$conn = dbconnect();
	try {
		$stmt = $conn->prepare($sql);
		$stmt->bindParam("email", $email);
		$stmt->bindParam("pword", $pword);
		$stmt->execute();
		$row = $stmt->fetchAll(PDO::FETCH_OBJ);
		echo json_encode($row, JSON_FORCE_OBJECT);
		
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	//echo json_encode(array("Email"=>$email,"Password"=>$pword));
}

function updateMember() {
	$user = $_POST['username'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$bio = $_POST['bio'];
	$sql = "UPDATE members SET fname=:fname,lname=:lname,email=:email,bio=:bio WHERE username=:user";
	$conn = dbconnect();
	try {
		$stmt = $conn->prepare($sql);
		$stmt->bindParam("fname", $fname);
		$stmt->bindParam("lname", $lname);
		$stmt->bindParam("email", $email);
		$stmt->bindParam("bio", $bio);
		$stmt->bindParam("user", $user);
		$stmt->execute();
		echo json_encode(array("First"=>$fname,"Last"=>$lname,"email"=>$email,"bio"=>$bio));
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
}

function dbconnect() {
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="movement";
	try {
		$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		//set PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	} catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
}

