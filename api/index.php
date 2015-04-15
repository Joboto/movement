<?php
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
 
$app->post('/getmember', 'grabamember');
$app->post('/newmember', 'regNew');
$app->get('/:product/:price', 'addToBasket');
$app->get('/:akey', 'removeFromBasket');
//$app->get('/:userName', 'newSession');
$app->get('/killsession', 'clearSession');

$app->run();

/*function newSession($userName){
	session_start();
	$_SESSION['UserName'] = $userName;
	echo $_SESSION['UserName'];
}*/

function clearSession(){
	session_start();
	session_unset();
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
	//echo json_encode(array("First"=>$fname,"Last"=>$lname,"email"=>$email,"bio"=>$bio));
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

