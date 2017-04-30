

<!DOCTYPE html>
<html lang="en-US">
   <head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
	  
	  <title>Lamstan - Book Donation </title>
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
        
         <!-- DONATE BOOK FORM-->
         <div class="signin-form">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">---BOOK DONATION FORM--- </h2><hr />
        
        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
          
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Fullname" name="fullname" required  />
        </div>
		
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required  />
        <span id="check-e"></span>
        </div>
        
		
		<div class="form-group">
        <input type="text" class="form-control" placeholder="Phone no" name="whatsappno" required  />
        </div>
		
		<div class="form-group">
        <input type="text" class="form-control" placeholder="Designation" name="designation" required  />
        </div>
		<div class="form-group">
        <input type="text" class="form-control" placeholder="Location of pickup books" name="location" required  />
        </div>
		
		
		<div class="form-group">
        <input type="textarea" class="form-control" placeholder="In case any query" name="query" required  />
        </div>
		
		<hr>
		
		
        <input type="text" class="form-control" placeholder="Enter captcha" name="ccode" required  />To verify</p>
        </div>
		
		</hr> 
        
     
		</hr>
        
        <div class="form-group">
 
            <a href="login.php" class="btn btn-default" style="float:right;">I am ready to HELP </a>
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
 





