<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>LamStan</title>
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
	  
	  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
  <script>
  
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
      appId: "67abd1cb-524e-40d9-861e-0983142df0b4",
      autoRegister: true, /* Set to true to automatically prompt visitors */
      subdomainName: 'lamstan',
      /*
      subdomainName: Use the value you entered in step 1.4: http://imgur.com/a/f6hqN
      */
      httpPermissionRequest: {
        enable: true
      },
      notifyButton: {
          enable: true /* Set to false to hide */
      }
    }]);
	
  </script>
                 
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->
      <header>
         <div id="topbar">
            <div class="line">
               <div class="s-12 m-6 l-6">
                  <a class="navbar-brand" href="http://www.lamstan.com">Welcome to Lamstan!</a>
               </div>
               <div class="s-12 m-6 l-6">
                  <div class="social right">
                     <a href="https://www.facebook.com/groups/lamstan/"><i class="icon-facebook_circle"></i></a> 
					 <a href="https://twitter.com/lamstanindia"><i class="icon-twitter_circle"></i></a> 
					 <a href="https://plus.google.com/u/0/109469743551860807742"><i class="icon-google_plus_circle"></i></a> 
					 <a href="https://www.instagram.com/info.lamstan/"><i class="icon-instagram_circle"></i></a>
                  </div>
               </div>
            </div>  
         </div> 
         <nav>
      
         </nav>
      </header>  
      <section>
        
         <!-- LATEST NEWS -->
         <div id="">
  
              <h2 class="section-title">Latest News</h2> 
			  <div>   
			  
                    
               <div class="tabs ">
			    <?php			 
			 include("includes/database.php");
			   
			   $get_cats="select * from categories";
			   
	$run_cats=mysqli_query($con,$get_cats);
	
	while($cats_row=mysqli_fetch_array($run_cats))
	
	{
	$cat_id=$cats_row['cat_id'];
	$cat_title=$cats_row['cat_title'];
	echo "<a href='index.php?cat=$cat_id'>$cat_title</a>";
	}
			   
?> 
		 

                  <div class="tab-item tab-active">
	  
                  <a class="tab-label active-btn navbar">SCHOOL NEWS</a>
				 
					  <div class="s-12 m-6 l-6">
                  <div class="s-12 l-2">
                    <!--<div class="news-date">
                      <p class="day">21</p><p class="month">MARCH</p><p class="year">2017</p>
                    </div>-->
                  </div>
                <div class="post_area">
				
                   <?php

				   $get_posts="select * from posts where category_id="$cat_id";
				   $run_posts=mysqli_query($con,$get_posts);
				   
				   while($row_posts=mysqli_fetch_array($run_posts))
				   {
					   $post_id=$row_posts['post_id'];
					   $post_title=$row_posts['post_title'];
					   $post_date=$row_posts['post_date'];
					   $post_author=$row_posts['post_author'];
					   $post_image=$row_posts['post_image'];
					   $post_content=$row_posts['post_content'];
					
					
					echo "
					
					<h2>$post_title</h2>
		<span>$post_author</span><span>$post_date</span>
		<img src='admin/news_images/$post_image' width='100' height='100'/>
				<div>$post_content</div>
				";	
				   }
				   
				   ?>
				 </div> 
                </div> 
                     
                  </div>
                  <div class="tab-item">
                    <a class="tab-label">COLLEGE NEWS</a>        
                       <div class="">
                    <div class="">
                      <h4>Aligarh Muslim University admissions 2017</h4>
                      <p>.................</p>
                    </div>
                  </div>
                  </div>
                  <div class="tab-item">
                    <a class="tab-label">CAREER NEWS</a>
					<div class="post_area">
                    <div class="">
                      <h4>JNU UG Admission 2017</h4>
                      <p>...................</p>
                    </div>
                  </div>
                     
                  </div>
                  
               </div>
           
         </div> 
			 
          
         </div> 
         
      <!-- FOOTER -->
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright &copy; 2017, UIET Design  </p>
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
