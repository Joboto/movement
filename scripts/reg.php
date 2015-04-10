<?php
include("dbconnect.php");
	echo '<script language="javascript">';
	echo 'alert("This is regNew")';
	echo '</script>';
	$fname = $_POST['fname'];
	$fname = $_POST['lname'];
	$fname = $_POST['email'];
	$fname = $_POST['bio'];
	$sql = "INSERT INTO members (fname, lname, email, bio) VALUES (:fname, :lname, :email, :bio)";
	//$conn = dbconnect();
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
	//$conn = null;

?>
