<?php
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
 
$app->post('/getmember', 'grabamember');
$app->post('/newmember', 'regNew');
$app->get('/:product/:price', 'addToBasket');
//$app->get('/:userName', 'newSession');
//$app->get('/killsession', 'clearSession');

$app->run();

/*function newSession($userName){
	session_start();
	$_SESSION['UserName'] = $userName;
	echo $_SESSION['UserName'];
}

function clearSession(){
	session_unset();
}*/

function addToBasket($product, $price){
	session_start();
	$_SESSION['basketItems'] = 1;
	$_SESSION['product'] = $product;
	$_SESSION['price'] = $price;
	echo $_SESSION['product'] . ' cost £' . $_SESSION['price'];
}

function regNew() {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pword = $_POST['password'];
	$bio = $_POST['bio'];
	//echo json_encode(array("First"=>$fname,"Last"=>$lname,"email"=>$email,"bio"=>$bio));
	$sql = "INSERT INTO members (fname, lname, email, pword, bio) VALUES (:fname, :lname, :email, :pword, :bio)";
	$conn = dbconnect();
	try {
		$stmt = $conn->prepare($sql);
		$stmt->bindParam("fname", $fname);
		$stmt->bindParam("lname", $lname);
		$stmt->bindParam("email", $email);
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
