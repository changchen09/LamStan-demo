<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lamstan_db";

	header('Location: index.html');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['btn-feedback'])) {
	
	$email = strip_tags($_POST['email']);
	$name = strip_tags($_POST['name']);
	$message = strip_tags($_POST['message']);
	
	$email = $conn->real_escape_string($email);
	$name = $conn->real_escape_string($name);
	$message = $conn->real_escape_string($message);

	$sql = "INSERT INTO feedback (email,name,message) VALUES ('$email','$name','$message')";

	if ($conn->query($sql) === TRUE) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully submitted !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error submitting !
					</div>";
		}

$conn->close();
}
?>