<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
require_once 'dbconnect.php';

if (isset($_POST['btn-feedback'])) {
	
	$email = strip_tags($_POST['email']);
	$name = strip_tags($_POST['name']);
	$message = strip_tags($_POST['message']);
	
	$email = $DBcon->real_escape_string($email);
	$name = $DBcon->real_escape_string($name);
	$message = $DBcon->real_escape_string($message);
		
	$query = "INSERT INTO feedback (email,name,message) VALUES ('$email','$name','$message')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully submitted !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error submitting !
					</div>";
		}
		
	echo $msg;
	
	$DBcon->close();
}
?>