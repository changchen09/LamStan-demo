<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
	
	$fname = strip_tags($_POST['fullname']);
	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	$wno = strip_tags($_POST['whatsappno']);
	$ucat = strip_tags($_POST['usercategory']);
	
	$fname = $DBcon->real_escape_string($fname);
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	$wno = $DBcon->real_escape_string($wno);
	$ucat = $DBcon->real_escape_string($ucat);
	
	//$mdpass = md5($upass);
	
	if ($_POST['ccode']==$_SESSION['random_code']){
		$accept="thank you";
	}

	else
	{
		$error="please verify that you typed the corect code.";
		
	}
	
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT, ['cost' => 13]); // this function works only in PHP 5.5 or latest version
	
	$check_user = $DBcon->query("SELECT username FROM users WHERE username='$uname'");
	$count=$check_user->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO users(fullname,username,email,password,whatsappno,usercategory) VALUES('$fname','$uname','$email','$hashed_password','$wno','$ucat')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
	  
	  <title>Lamstan - Login & Registration</title>
	  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	  <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
	  <link rel="stylesheet" href="style.css" type="text/css" />
	  
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
    
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script> 
	  
	  <style type="text/css">
	  .error
	  {
		  color:#FF0000;
		  margin:0 0 10px 0;
	  }
	  .accept
	  {
		  
		   color:#339968;
		  margin:0 0 10px 0;
	  }
	  </style>
                 
    
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      
        
         <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><img src="img/Logo.png"></p>  <>
	<!--			  
<ul>
<li><a href="https://www.facebook.com/groups/lamstan/"><img src="img/fl.png"></a>
</li>
				<!-- <div class="social">
				  <div class="s-12 m-6 l-6">
                  
                     <a href="https://www.facebook.com/groups/lamstan/"><i class="icon-facebook_circle"></i></a> <a href="https://twitter.com/lamstanindia"><i class="icon-twitter_circle"></i></a> <a href="https://plus.google.com/u/0/109469743551860807742"><i class="icon-google_plus_circle"></i></a> <a href="https://www.instagram.com/info.lamstan/"><i class="icon-instagram_circle"></i></a>
                  </div>
				  
				  
				   </div>-->
				  
				  
				  
				  
				  
               </div>
               
               
         </div>
        
         <!-- SIGN IN-->
         <div class="signin-form">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Sign Up</h2><hr />
        
        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
          
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Fullname" name="fullname" required  />
        </div>
		
		<div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="username" required  />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required  />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>
		
		<div class="form-group">
        <input type="text" class="form-control" placeholder="WhatsApp No." name="whatsappno" required  />
        </div>
		
		<div class="form-group">
			<h2 class="form-signin-heading">User Category?</h2><hr />
			  <input type="radio" class="form-control" name="usercategory" value="School"><h2 class="form-signin-category">School</h2>
			  <input type="radio" class="form-control" name="usercategory" value="College"><h2 class="form-signin-category">College</h2>
			  <input type="radio" class="form-control" name="usercategory" value="Professional"><h2 class="form-signin-category">Professional</h2>
		</div>
		<hr>
		<div class="form-group">
		<img src="captcha1.php" align="centre"  border="pixels">
		
		
		<p>
		<hr>
		
        <input type="text" class="form-control" placeholder="Enter captcha" name="ccode" required  />Are you human?</p>
        </div>
		
		</hr>
        
     	</hr>
		</hr>
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in" ></span> &nbsp; Create Account
			</button> 
            <a href="login.php" class="btn btn-default" style="float:right;">Log In Here</a>
        </div> 
      
      </form> 
	  
    
	</div>
		 
		
        
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2017, UIET Design </p>
			   <p>CONTACT US: <strong>   <br>Ph. 08800332445 (New- Delhi)-
       009596985101 (Leh- Ladakh)</strong>| <strong>info.lamstan@gmail.com</strong></p>
               
            </div>
            <div class="s-12 l-6">
               <a class="right" href="http://www.uiet.puchd.ac.in/" title="~ Stanzin ~ Rinchen ~ Vaishali ~">Design and coding<br> by UIET students</a>
            </div>
         </div>
      </footer>
	  <?php if(!empty($error)) echo ' <div class="error">'.$error.'</div>'; ?>
	   <?php if(!empty($accept)) echo ' <div class="accept">'.$accept.'</div>';?>
	  

   </body>
</html>
 





