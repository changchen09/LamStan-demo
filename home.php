<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: login.php");
}

$query = $DBcon->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>

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
                  <a class="navbar-brand" href="http://www.lamstan.com">Welcome to LamStan!</a>
               </div>
			   <div class="s-12 m-6 l-6">
					
               </div>
               <div class="s-12 m-6 l-6">
				    <a href="#">&nbsp; <?php echo $userRow['username']; ?></a>
					<a href="logout.php?logout">&nbsp; Logout</a>
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
            <div class="line">
               <div class="s-12 l-2">
                  <p class="logo"><a href="http://www.lamstan.com"><img src="img/Logo.png"></a></p>
               </div>
               <div class="top-nav s-12 l-10">
                  <p class="nav-text">Menu</p>
                  <ul class="right">
                     <li class="active-item"><a href="#carousel">Home</a></li>
					 <li><a href="#features">Features</a></li>
                     <li><a href="#about-us">About Us</a></li>
					 <li><a href="#our-work">Our Work</a></li>
					 <li><a href="#latest-news">Latest feed</a></li>
					 <li><a href="#contact">Contact</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>  
      <section>
	  
	  <!-- CAROUSEL --> 
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">

				<div class="item" >
                  <img src="img/first.jpg" alt="" >
                  <div class="line">
                     <div class="text hide-s"> 
                        <div class="line"> 
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div> 
                        <h2>WELCOME  TO LAMSTAN</h2>
                        <p>LamStan is an organisation of young people, who share the same passion for assisting their fellow students from remotest part of world. Students of different grades are offered assistance to pursue their dreams in life. <br> <br>
						"Never underestimate your ability to make someone else's life better- even if you never know it" -Greg Louganis</p>
                     </div>
                  </div>
               </div>
			
               <div class="item">
                  <img src="img/second.jpg" alt="">
                  <div class="line"> 
                     <div class="text hide-s">
                        <div class="line"> 
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div> 
                        <h2>LAMSTAN CAREER COUNCELLING</h2>
                        <p> With the aims & objectives of providing a platform for good decision making with genuine interest & scope, we as a group of students formed a society by the name "LamStan", where 'Lam' means 'Path' & 'Stan' means 'to show' or " Showing Path". “LamStan” as the name itself reflects our objective. The education being a major right of every child in 21st century and a need to walk shoulder to shoulder with the world, we have always been the core value for all ladakhi parents who are enlightened with the worth of being educated. Today a very huge sum of ransom is being spent by parents for educating and providing their children with quality education in good institutions.
						Ladakh today is aware of value of quality education but still somewhere lacking information about various career scopes for an individual. </p>
                     </div>
                  </div>
               </div>
              
               <div class="item">
                  <img src="img/third.jpg" alt="">
                  <div class="line">
                     <div class="text hide-s">
                        <div class="line"> 
                          <div class="prev-arrow hide-s hide-m">
                             <i class="icon-chevron_left"></i>
                          </div>
                          <div class="next-arrow hide-s hide-m">
                             <i class="icon-chevron_right"></i>
                          </div>
                        </div> 
                        <h2>COME AND JOIN LAMSTAN - "TOGETHER WE CAN MAKE A DIFFERENCE"</h2>
                        <p>Abstracting and digesting information from diverse sources across the world, we take pride in providing actionable knowledge at appropriate juncture throughout the formative period of one's career.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">
				<div class=" center"><h1>Welcome, <?php echo $userRow['username']; ?> !</div>
               <h1>*** COME AND JOIN LAMSTAN TOGETHER WE CAN MAKE A DIFFERENCE ***</h1>
               <p>”LamStan” attempts to bridge the opportunity divide.</p>
			   
            </div>
         </div>
		 
		 <!-- FEATURES -->
         <div id="features">
            <div class="line">
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-tablet icon3x"></i>
                     <h2>Fully updated</h2>
                     <p>We used to update everything related to your career and about all kinds of exams.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-isight icon3x"></i>
                     <h2>Push notifications</h2>
                     <p>You'll get instant Web & App push notifications whenever we post anything on our site.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-star icon3x"></i>
                     <h2>Categorized posts</h2>
                     <p>For logged-in users, they'll get only their category of updates that they'll select during registration.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-heart icon3x"></i>
                     <h2>Quick response</h2>
                     <p>Anyone can seek help for their career related issues and guidance from our helpful seniors & experts right here.</p>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- ABOUT US -->
         <div id="about-us">
            <div class="s-12 m-12 l-6 media-container">
               <img src="img/event01.jpg" alt="">
            </div>
            <article class="s-12 m-12 l-6">
               <h2>We Provide<br> Education<br> and career planning</h2> 
               <p>LamStan is an organisation of young people, who share the same passion for assisting their fellow students from remotest part of world. Students of different grades are offered assistance to pursue their dreams in life.

Various students from Ladakh, due to incompetent facilities/opportunities in their own native area, find the necessity for moving to other cities to further their studies/career. Pursuing studies or hunting jobs in other cities opens a whole new can of worms. In their crusade, students often get trapped into dilemmas, such as, which college to study, which course to opt for, will engineering do the best for them or should they opt for commerce courses, and the list goes on for eternity. In all these chaos, many students end up studying in wrong colleges/schools, or leaving the idea altogether and returning back to their respective homes. 
               </p>
               
            </article>
         </div>
		 
		 <!-- OUR WORK -->
         <div id="our-work">
            <div class="line">
               <h2 class="section-title">Our Work</h2>
			   
               <div class="tabs">
			   
                  <div class="tab-item tab-active">
                    <a class="tab-label active-btn">Events & Workshops</a>
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a href="events/index.html" target="_blank" class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Career Councelling</h4><p>We keep organising career concelling events in various schools.</p></div><img src="img/event02.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a href="events/index.html" target="_blank" class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Helpful Seniors</h4><p>Our volunteered seniors keep guiding school students in remote places.</p></div><img src="img/event04.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a href="events/index.html" target="_blank" class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Volunteers</h4><p>Anyone can join LamStan during our events and make a difference.</p></div><img src="img/event05.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a href="events/index.html" target="_blank" class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Cultural Awareness</h4><p>We do cultural events occasionally to preserve our rich culture.</p></div><img src="img/event06.jpg" alt=""></a></div>
                      </div>
					  
					  <a href="#" target="_blank"><h3> Find out more about our past, ongoing & upcoming events here... </h3></a>
					  
                    </div>  
                  </div>
				  
                  <div class="tab-item">
                    <a class="tab-label">Scholarship Updates</a>        
                    <div class="tab-content">
                      <div class="margin">
						<a href="Scholarships/Scholarship/JK Post Metric.pdf" target="_blank">JK Post Metric</a><hr />
						<a href="Scholarships/Scholarship/JK Scholarship Pre Metric.pdf" target="_blank">JK Scholarship Pre Metric</a><hr />
						<a href="Scholarships/Scholarship/Post Matric Scheme of Merit  Cum Means for Minority Students.pdf" target="_blank">Post Matric Scheme of Merit  Cum Means for Minority Students</a><hr />
						<a href="Scholarships/Scholarship/Post Matric Scholarship for Minority.pdf" target="_blank">Post Matric Scholarship for Minority</a><hr />
						<a href="Scholarships/Scholarship/Pre-matric Scholarship to Minority Students.pdf" target="_blank">Pre-matric Scholarship to Minority Students</a><hr />
						<a href="Scholarships/Scholarship/Sanjoy Ghose Media Fellowship 2013.pdf" target="_blank">Sanjoy Ghose Media Fellowship 2013</a><hr />
						<a href="Scholarships/IAS Free Coaching.pdf" target="_blank">IAS Free Coaching</a><hr />
						<a href="Scholarships/JK Scholarship.pdf" target="_blank">JK Scholarship</a><hr />
						<a href="Scholarships/Minority Form.pdf" target="_blank">Minority Form</a><hr />
						<a href="Scholarships/Minority.pdf" target="_blank">Minority</a><hr />
						<a href="Scholarships/Post Metric ST.pdf" target="_blank">Post Metric ST</a><hr />
						<a href="Scholarships/Post Metric.pdf" target="_blank">Post Metric</a><hr />
						<a href="Scholarships/Pre Metric.pdf" target="_blank">Pre Metric</a><hr />
						<a href="Scholarships/ST Foreign.pdf" target="_blank">ST Foreign</a><hr />
						<a href="Scholarships/ST Scholarship Central.pdf" target="_blank">ST Scholarship Central</a><hr />                      </div>
                    </div>  
                  </div>
				  
                  <div class="tab-item">
                    <a class="tab-label">LamStan Book Bank</a>
                    <div class="tab-content">
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por4.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por6.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-12"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/book-donation.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Lorem Ipsum Dolor</h4><p>Laoreet dolore magna aliquam erat volutpat.</p></div><img src="img/por5.jpg" alt=""></a></div>
                      </div>
                    </div>  
                  </div>
				  
                  <div class="tab-item">
                    <a class="tab-label">Admission Guidance</a>
                    <div class="tab-content">
                      <div class="margin">
							<p><a name="_GoBack"></a><b class="lamheading">Working:</b></p>

							<p align="justify">The basic structure of <a href="www.lamstan.com" target="_blank">www.lamstan.com</a> is that this website will be forming a network of school, college students and professionals , who are not able to communicate and share their experience to other students and help them in their respective fields.Lamstan is a secular and social organisation which is operating in remote areas. We believe in providing guidance to every one ,irrespective of their faith, religion, caste and creed. Bridging the gap between traditional education and modern education to curb social evils and to cultivate a culture of helping and guiding beyond boundaries.Lamstan is a platform for those with true zeal of guiding, mentoring and sharing knowledge and feelings. A thought might have come in everybody’s mind to approach helpfull people , But the problem was a link to connect you to these people. Now Lamstan will serve as a bridge between you and these people, together shaping your dreams into reality. Basically through this website we will be creating a chain of dependence : E.g. Student in school will be guided by college student College students will be guided by those in professional line.</p>
							<p align="center"><img src="img/Hierarchy.jpg" /></p>
							<p align="justify">This website will be providing necessary details about various Schools in Delhi, Chandigarh, Jammu, etc. Along with that it will be providing necessary updates regarding various Engineering, Medical, Law etc.</p>
                      </div>
                    </div>  
                  </div>
				  
				  <div class="tab-item">
                    <a class="tab-label">Helpful Links</a>
					
                    <div class="tab-content">
					
                      <div class="margin">
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Career After 10th</h4><p>Career streams to choose.</p></div><img src="img/event02.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Schools in India</h4><p>Best schooling places.</p></div><img src="img/event04.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>Colleges in India</h4><p>Best choice of colleges.</p></div><img src="img/event05.jpg" alt=""></a></div>
                        <div class="s-12 m-6 l-3"><a class="our-work-container lightbox margin-bottom"><div class="our-work-text"><h4>UG & PG Institutes</h4><p>Good choices to go for UG & PG courses.</p></div><img src="img/event06.jpg" alt=""></a></div>
                      </div>
					</div>
					  
                  </div>  
                  </div>
				  
               </div>
            </div>
         </div>   
		  
         <!-- SERVICES -->
         <div id="services">
            <div class="line">
               <h2 class="section-title">What we do</h2>
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
		 
         <!-- LATEST NEWS -->
         <div id="latest-news">
            <div class="line">
              <h2 class="section-title">Latest Feed</h2> 
				  <div class="margin">
					<div class="s-12 m-6 l-6">
					  <div class="s-12 l-2">
						<div class="news-date">
						  <p class="day">13</p><p class="month">NEW</p><p class="year">NEWS</p>
						</div>
					  </div>
					  <div class="s-12 l-10">
						<div class="news-text">
						  <h4>Latest News</h4>
						  <a href="mycms/indexn.php" target="_blank"> Go to the news feed page here.. </a>
						</div>
					  </div>   
					</div> 
					<div class="s-12 m-6 l-6">
					  <div class="s-12 l-2">
						<div class="news-date">
						  <p class="day">21</p><p class="month">NEW</p><p class="year">ARTICLES</p>
						</div>
					  </div>
					  <div class="s-12 l-10">
						<div class="news-text">
						  <h4>Latest Articles</h4>
						  <a href="mycms/indexn.php" target="_blank"> Go to the articles page here.. </a>
						</div>
					  </div>   
					</div>  
				  </div>
				  <!--
				  <div class="margin"> 
					<div class="column-title">Latest News:</div>

						<marquee scrollamount="2" behavior="scroll" width="225" height="160" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
						<?php include('admin/fetch_marquee.php');?>
						</marquee>
								
						<li><a href="LNSM.php" class="more">See All</a></li>
				  
				  </div>-->
				  
            </div>
         </div> 
		 
         <!-- CONTACT -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Contact Us</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                    <img src="img/contact.jpg" alt="">
                  </div>
                  <div class="s-12 m-12 l-4 margin-bottom right-align">
                     <h3>Contact Details</h3>                                         
					 
					 
					 
                     <address>
                        <p><strong>Call us for help with any aspect of your purchase, Offline.</strong><br><pre>Ph. 08800332445 (New- Delhi)
						
   009596985101 (Leh- Ladakh) </pre></p>
                        <p><strong>Address:</strong>&nbsp;Choglamsar,
Leh Ladakh-194101,
Jammu & Kashmir. </p>
                        <p><strong>E-mail:</strong>&nbsp;info.lamstan@gmail.com </p>
                     </address>
                     <br />
                    
                  </div>
                  <div class="s-12 m-12 l-5">
                    <h3>FEEDBACK FORM (Incase improvement required)</h3>
                    <form class="customform" method="post" action="fb_test.php">
                      <div class="s-12"><input name="email" placeholder="Your e-mail" title="Your e-mail" type="text" required/></div>
                      <div class="s-12"><input name="name" placeholder="Your name" title="Your name" type="text" required/></div>
                      <div class="s-12"><textarea placeholder="Your message" name="message" rows="5" required></textarea></div>
                      <div class="s-12 m-12 l-4"><button class="color-btn" name="btn-feedback" onclick="" type="submit">Submit Button</button></div>
                    </form>
                  </div>                
               </div>
            </div>
         </div>
        
      </section>
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
			   <strong> Visitor count -> </strong>
			   <a href="http://www.reliablecounter.com" target="_blank"><img src="http://www.reliablecounter.com/count.php?page=lamstan.com&digit=style/plain/12/&reloads=0" alt="www.reliablecounter.com" title="www.reliablecounter.com" border="0"></a><br /><a href="http://www.analogmix.com/mastering.html" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;">audio mastering tips</a>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            var theme_slider = $("#owl-demo");
            $("#owl-demo").owlCarousel({
                navigation: false,
                slideSpeed: 300,
                paginationSpeed: 400,
                autoPlay: 6000,
                addClassActive: true,
             // transitionStyle: "fade",
                singleItem: true
            });
            $("#owl-demo2").owlCarousel({
                slideSpeed: 300,
                autoPlay: true,
                navigation: true,
                navigationText: ["&#xf007","&#xf006"],
                pagination: false,
                singleItem: true
            });
        
            // Custom Navigation Events
            $(".next-arrow").click(function() {
                theme_slider.trigger('owl.next');
            })
            $(".prev-arrow").click(function() {
                theme_slider.trigger('owl.prev');
            })     
        }); 
      </script>
   </body>
</html>
