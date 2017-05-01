<?php
session_start();
require_once 'dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
	exit;
}

if (isset($_POST['btn-login'])) {
	
	$username = strip_tags($_POST['username']);
	//$password = md5($_POST['password']);
	$password = strip_tags($_POST['password']);
	
	$username = $DBcon->real_escape_string($username);
	$password = $DBcon->real_escape_string($password);
	
	$query = $DBcon->query("SELECT * FROM users WHERE username='$username'");
	$row=$query->fetch_array();
	
	$count = $query->num_rows; // if email/password are correct returns must be 1 row
	
	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: home.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
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
	  
	  <link rel="stylesheet" href="style.css" type="text/css" />
	  
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script> 
                 
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   
   <body class="size-1140">
	  
      <section>
         
         <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><a href="index.html"><img src="img/Logo.png"></a></p>
			</div>     
         </div>
         
         <!-- ABOUT US -->
         <div id="about-us">
		 <div class="s-12 m-12 l-6 media-container">
               
			   <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Sign In -></h2><hr />
        
        <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="username" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>
       
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
            
            <a href="register.php" class="btn btn-default" style="float:right;">Sign Up Here</a>
            
        </div>  
        
        
      
		</form>
			   
         </div>
		 
		 <div class="s-12 m-12 l-6 media-container">
		 
		 <h1> Login Benefits </h1>

			<div class="margin">
                  <div class="s-12 m-6 l-6 margin-bottom">
                     <i class="icon-tablet icon3x"></i>
                     <h2>Fully updated</h2>
                     <p>We used to update everything related to your career and about all kinds of exams.</p>
                  </div>
                  <div class="s-12 m-6 l-6 margin-bottom">
                     <i class="icon-isight icon3x"></i>
                     <h2>Push notifications</h2>
                     <p>You'll get instant Web & App push notifications whenever we post anything on our site.</p>
                  </div>
                  <div class="s-12 m-6 l-6 margin-bottom">
                     <i class="icon-star icon3x"></i>
                     <h2>Categorized posts</h2>
                     <p>For logged-in users, they'll get only their category of updates that they'll select during registration.</p>
                  </div>
                  <div class="s-12 m-6 l-6 margin-bottom">
                     <i class="icon-heart icon3x"></i>
                     <h2>Quick response</h2>
                     <p>Anyone can seek help for their career related issues and guidance from our helpful seniors & experts right here.</p>
                  </div>
               </div>
			   
			<div class="margin">
                  <div class="s-12 m-6 l-4 margin-bottom">
                     <i class="icon-vector"></i>
                     <div class="service-text">
                        <h3>LamStan operates in remote areas and provide guidance to students regarding their career goals </h3>
                        <p>In this enigmatic world of ours, where survival means struggle of any sort, needs to be introduced in full frame (modes) in order to get a glimpse of various avenues (courses), compatible with our interests & satisfactory enough for a happier life.</p>
                     </div>
                  </div>
                  <div class="s-12 m-6 l-4 margin-bottom">
                     <i class="icon-eye"></i>
                     <div class="service-text">
                        <h3>We look to the future</h3>
                        <p>Adolescent is an age group where we not only become carefree due to emotion upheaval but also susceptible to wrong decisions, which might change the whole complexion of our future life. It is in this light that careful & meticulous guidance needs to be provided in order to let them think, decide & adore their future course.</p>
                     </div>
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom">
                     <i class="icon-random"></i>
                     <div class="service-text">
                        <h3>provide a very exclusive opportunity to seek advice from experienced professionals</h3>
                        <p>Our training approach includes a mix of lectures, workshops, role play, site visits and social activities. Our aim is to bring up those who are outside the sphere of modern education system and career opportunities.</p>
                     </div>
                  </div>
               </div>

		 </div>
		 
         </div>
		 
        
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p align="left">Copyright 2017, UIET Design </p>
			   <p align="left">CONTACT US: <strong>   <br>Ph. 08800332445 (New- Delhi)-
       009596985101 (Leh- Ladakh)</strong>| <strong>info.lamstan@gmail.com</strong></p>
               
            </div>
            <div class="s-12 l-6">
               <a class="left" href="http://www.uiet.puchd.ac.in/" title="~ Stanzin ~ Rinchen ~ Vaishali ~">Design and coding<br> by UIET students</a>
            </div>
         </div>
      </footer>
      <s
   </body>
</html>