<?php
require 'Slim/Slim.php';

\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
 
$app->post('/getmember', 'grabamember');
$app->post('/newmember', 'regNew');
$app->put('/put',function () {echo 'This is a PUT route';});
$app->patch('/patch', function () {echo 'This is a PATCH route';});
$app->delete('/delete',function () {echo 'This is a DELETE route';});

$app->run();

function regNew() {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$bio = $_POST['bio'];
	//echo json_encode(array("First"=>$fname,"Last"=>$lname,"email"=>$email,"bio"=>$bio));
	$sql = "INSERT INTO members (fname, lname, email, bio) VALUES (:fname, :lname, :email, :bio)";
	$conn = dbconnect();
	try {
		$stmt = $conn->prepare($sql);
		$stmt->bindParam("fname", $fname);
		$stmt->bindParam("lname", $lname);
		$stmt->bindParam("email", $email);
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
	echo json_encode(array("Email"=>$email,"Password"=>$pword));
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
