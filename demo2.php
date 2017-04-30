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
                 
    
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      
        
         <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><img src="img/Logo.png"></p>  
				  

				<!-- <div class="social">
				  <div class="s-12 m-6 l-6">
                  
                     <a href="https://www.facebook.com/groups/lamstan/"><i class="icon-facebook_circle"></i></a> <a href="https://twitter.com/lamstanindia"><i class="icon-twitter_circle"></i></a> <a href="https://plus.google.com/u/0/109469743551860807742"><i class="icon-google_plus_circle"></i></a> <a href="https://www.instagram.com/info.lamstan/"><i class="icon-instagram_circle"></i></a>
                  </div>
				  
				  
				   </div>-->
				  
				  
				  
				  
				  
               </div>
               
               
         </div>
        
         <!-- SIGN IN-->
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

   </body>
</html>
