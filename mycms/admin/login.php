<!DOCTYPE html>
<html>
<head>
<meta http>
<title>admin login</title>
<link rel="stylesheet" href="style_login.css" media="all"/>
</head>
<body>

<div class="login">
<h1>Admin Login</h1>
<form method="post" action="login.php">

<input type="text" name="user_name"
placeholder="Username"
required="required"/>

<input type="password" name="user_pass"
placeholder="Password"
required="required"/>

<button type="submit" class="btn btn-primary btn-block btn-large" name="login">Admin Login
</button>
</form>
</div>
</body>
</html>

<?php
include("includes/database.php");

if(isset($_POST['login']))
{
	$user_name=$_POST['user_name'];
	$user_pass=$_POST['user_pass'];
	
$select_user="select * from users where user_name='$user_name' AND user_password='$user_pass' ";

$run_user=mysqli_query($con,$select_user);


if(mysqli_num_rows($run_user)>0)
{
	echo "<script>window.open('index.php','_self')</script>";   // ?logged=you have successfully logged In!
		
}
else
{
	echo "<script>alert('User Name or Password is incorrect')</script>";
}
}
?>