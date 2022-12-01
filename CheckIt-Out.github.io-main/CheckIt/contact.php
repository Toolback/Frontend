<?php

// Make the page validate
ini_set('session.use_trans_sid', '0');

// Create a random string, leaving out 'o' to avoid confusion with '0'
$char = strtoupper(substr(str_shuffle('abcdefghjkmnpqrstuvwxyz'), 0, 4));

// Concatenate the random string onto the random numbers
// The font 'Anorexia' doesn't have a character for '8', so the numbers will only go up to 7
// '0' is left out to avoid confusion with 'O'
$str = rand(1, 7) . rand(1, 7) . $char;

// Begin the session
session_start();

// Set the session contents
$_SESSION['captcha_id'] = $str;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Checkit Out - Contact</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

<!-- Template Styles -->
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css"/>
<link rel="stylesheet" href="css/et-line-font/et-line-font.css">

<!-- Base MasterSlider style sheet -->
<link rel="stylesheet" href="js/masterslider/style/masterslider.css" />
<link rel="stylesheet" href="js/masterslider/skins/default/style.css" />
<link rel="stylesheet" href="js/masterslider/style/style.css" />

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />

<!-- Mega Menu -->
<link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">

<!-- load css for cubeportfolio -->
<link rel="stylesheet" type="text/css" href="js/cubeportfolio/css/cubeportfolio.min.css">

<!-- Animations -->
<link href="js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />

<!-- Video PopUp -->
<link rel="stylesheet" type="text/css" href="css/YouTubePopUp.css">

<!-- owl carousel assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
<link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">

<!-- forms -->
<link rel="stylesheet" href="js/form/css/sky-forms.css" type="text/css" media="all">
</head>
<body>
<div class="site-wrapper">
  <div class="temp-header sty1">
    <div class="top-bar solid-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-6"><i class="fa fa-envelope-o"></i> 123-456-7890 <span>|</span> <i class="fa fa-phone"></i> 123-456-7890</div>
          <div class="col-md-6 right-padd0 text-right social-media"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-flickr"></i></a> </div>
        </div>
        <!--end of row--> 
      </div>
    </div>
    <div class="header-section white pin-style">
      <div class="container">
        <div class="mod-menu">
          <div class="row">
            <div class="col-sm-2"> <a href="index.html" title="" class="logo"> <img src="images/logo-black.png" alt=""> </a> </div>
            <div class="col-sm-10">
              <div class="main-nav">
                <ul class="nav navbar-nav top-nav">
                  <li class="search-parent"> <a href="javascript:void(0)" title=""><i aria-hidden="true" class="fa fa-search"></i></a>
                    <div class="search-box">
                      <div class="content">
                        <div class="form-control">
                          <input type="text" placeholder="Type to search" />
                          <a href="#" class="search-btn"><i aria-hidden="true" class="fa fa-search"></i></a> </div>
                        <a href="#" class="close-btn">x</a> </div>
                    </div>
                  </li>
                  <li class="cart-parent"> <a href="javascript:void(0)" title=""> <i aria-hidden="true" class="icon-basket"></i> <span class="number"> 2 </span> </a>
                    <div class="cart-box">
                      <div class="content">
                        <div class="row">
                          <div class="col-xs-8 f-15 black-text">2 item(s)</div>
                          <div class="col-xs-4 text-right"> <span>$99</span> </div>
                        </div>
                        <ul class="trbg">
                          <li class="f-15 black-text"> <img src="images/cart-img-01.jpg" alt=""> Fashion Hat <span>$30</span> <a href="#" title="" class="close-btn">x</a></li>
                          <li class="f-15 black-text"> <img src="images/cart-img-02.jpg" alt=""> Fashion Hat <span>$30</span> <a href="#" title="" class="close-btn">x</a></li>
                        </ul>
                        <div class="row">
                          <div class="col-xs-6"> <a href="#" title="View Cart" class="btn btn-block btn-warning">View Cart</a> </div>
                          <div class="col-xs-6"> <a href="#" title="Check out" class="btn btn-block btn-primary">Check out</a> </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="visible-xs menu-icon"> <a href="javascript:void(0)" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false"> <i aria-hidden="true" class="fa fa-bars"></i> </a></li>
                </ul>
                <div id="menu" class="collapse">
                  <ul class="nav navbar-nav">
                    <li> <a href="index.html">Home</a> <span class="arrow"></span>
                      <ul class="dm-align-2">
                        <li><a href="index.html">Home Loyout 1</a></li>
                        <li><a href="index-2.html">Home Loyout 2</a></li>
                        <li><a href="index-3.html">Home Loyout 3</a></li>
                        <li><a href="index-4.html">Home Loyout 4</a></li>
                        <li><a href="index-5.html">Home Loyout 5</a></li>
                        <li><a href="index-6.html">Home Loyout 6</a></li>
                        <li><a href="index-7.html">Home Loyout 7</a></li>
                        <li><a href="index-8.html">Home Loyout 8</a></li>
                        <li><a href="index-9.html">Home Loyout 9</a></li>
                        <li><a href="index-10.html">Home Loyout 10</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Pages</a><span class="arrow"></span>
                      <ul class="dm-align-2">
                        <li><a href="#">About Us <i class="fa fa-angle-right right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul>
                            <li><a href="about.html">About Us 1</a></li>
                            <li><a href="about2.html">About Us 2</a></li>
                            <li><a href="about3.html">About Us 3</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Serives <i class="fa fa-angle-right right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul>
                            <li><a href="services.html">Serives 1</a></li>
                            <li><a href="services2.html">Serives 2</a></li>
                            <li><a href="services3.html">Serives 3</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Team <i class="fa fa-angle-right right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul>
                            <li><a href="team.html">Team 1</a></li>
                            <li><a href="team2.html">Team 2</a></li>
                            <li><a href="team3.html">Team 3</a></li>
                          </ul>
                        </li>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="login.html" target="_blank">Login</a></li>
                        <li><a href="register.html" target="_blank">Register</a></li>
                        <li><a href="404.html">404 page</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Portfolio </a> <span class="arrow"></span>
                      <ul class="dm-align-2">
                        <li><a href="#">Portfolio Column <i class="fa fa-angle-right right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul>
                            <li><a href="portfolio-one.html">One Column</a></li>
                            <li><a href="portfolio-two.html">Two Column</a></li>
                            <li><a href="portfolio-three.html">Three Column</a></li>
                            <li><a href="portfolio-four.html">Four Column</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Portfolio Classic <i class="fa fa-angle-right right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul>
                            <li><a href="portfolio-mosaic.html">Mosaic</a></li>
                            <li><a href="portfolio-mosaic-flat.html">Mosaic Flat</a></li>
                            <li><a href="portfolio-masonry.html">Masonry</a></li>
                            <li><a href="portfolio-masonry-projects.html">Masonry-Projects</a></li>
                            <li><a href="portfolio-slider-projects.html">Slider Projects</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Portfolio Custom <i class="fa fa-angle-right right" aria-hidden="true"></i> </a> <span class="arrow"></span>
                          <ul>
                            <li><a href="portfolio-full-width.html">Full Width</a></li>
                            
                            <li><a href="portfolio-modern.html">Modern</a></li>
                            <li><a href="portfolio-left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="portfolio-right-sidebar.html">Right Sidebar</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="mega-menu"> <a href="carousel-sliders.html">UI Elements</a> <span class="arrow"></span>
                      <ul>
                        <li><a href="#">UI Elements 1</a> <span class="arrow"></span>
                          <ul class="trbg">
                            <li><a href="ul-accordions.html">Accordions</a></li>
                            <li><a href="ul-alerts.html">Alerts</a></li>
                            <li><a href="ul-animations.html">Animations</a></li>
                            <li><a href="ul-blockquotes.html">Blockquotes</a></li>
                            <li><a href="ul-breadcrumbs.html">Breadcrumbs</a></li>
                            <li><a href="ul-buttons.html">Buttons</a></li>
                            <li><a href="ul-call-to-action.html">Call to Action</a></li>
                          </ul>
                        </li>
                        <li><a href="#">UI Elements 2</a> <span class="arrow"></span>
                          <ul class="trbg">
                            <li><a href="ul-content-boxes.html">Content Boxes</a></li>
                            <li><a href="ul-data-tables.html">Data Tables</a></li>
                            <li><a href="ul-dividers.html">Dividers</a></li>
                            <li><a href="ul-heading-styles.html">Heading Styles</a></li>
                            <li><a href="ul-counters.html">Counters</a></li>
                            <li><a href="ul-hover-styles.html">Hover Styles</a></li>
                            <li><a href="ul-carousel-sliders.html">Carousel Sliders</a></li>
                          </ul>
                        </li>
                        <li><a href="#">UI Elements 3</a> <span class="arrow"></span>
                          <ul class="trbg">
                            <li><a href="ul-icon-boxes.html">Icon Boxes</a></li>
                            <li><a href="ul-countdown-timers.html">Countdown Timers</a></li>
                            <li><a href="ul-lightbox.html">Lightbox</a></li>
                            <li><a href="ul-lists.html">Lists</a></li>
                            <li><a href="ul-maps.html">Maps</a></li>
                            <li><a href="ul-typography.html">Typography</a></li>
                            <li><a href="ul-videos.html">Videos</a></li>
                          </ul>
                        </li>
                        <li><a href="#">UI Elements 4</a> <span class="arrow"></span>
                          <ul class="trbg">
                            <li><a href="ul-pagenation.html">Pagenation</a></li>
                            <li><a href="ul-parallax-backgrounds.html">Parallax Backgrounds</a></li>
                            <li><a href="ul-pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="ul-charts.html">Charts</a></li>
                            <li><a href="ul-progress-bars.html">Progress Bars</a></li>
                            <li><a href="ul-toogle-switches.html">Toogle Switches</a></li>
                            <li><a href="ul-timeline.html">Timeline</a></li>
                          </ul>
                        </li>
                        <li><a href="#">UI Elements 5</a> <span class="arrow"></span>
                          <ul class="trbg">
                            <li><a href="ul-star-ratings.html">Star Ratings</a></li>
                            <li><a href="ul-social-icons.html">Social Icons</a></li>
                            <li><a href="ul-tabs.html">Tabs</a></li>
                            <li><a href="ul-team.html">Team</a></li>
                            <li><a href="ul-testimonials.html">Testimonials</a></li>
                            <li><a href="ul-tooltips.html">Tooltips</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="right"> <a href="#" class="m-link">Blog</a> <span class="arrow"></span>
                      <ul class="dm-align-2">
                        <li><a href="blog.html"> Blog Full Width</a></li>
                        <li><a href="blog1.html"> Blog 2 Columns</a></li>
                        <li><a href="blog2.html"> Blog 3 Columns</a></li>
                        <li><a href="blog3.html"> Blog 4 Columns</a></li>
                        <li><a href="blog4.html"> Blog Standard</a></li>
                        <li><a href="blog-post.html"> Single Post</a></li>
                      </ul>
                    </li>
                    <li class="right active"> <a href="#" class="m-link">Contact</a> <span class="arrow"></span>
                      <ul class="dm-align-2">
                        <li class="active"><a href="contact.php"> Contact 1</a></li>
                        <li><a href="contact2.php"> Contact 2</a></li>
                        <li><a href="contact3.php"> Contact 3</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu--> 
    </div>
    <!--end menu--> 
  </div>
  <div class="clearfix"></div>
  
  <!-- Sub Header -->
  <div class="page-header four">
    <div class="container">
      <div class="col-md-6">
        <h3>Contact Style 1</h3>
        <h4>Get in Touch with Us</h4>
      </div>
      <div class="col-md-6">
        <div class="breadcrumbs"><a href="index.html">Home</a> <i>/</i> <a href="#">Contact</a> <i>/</i> Contact Style 1</div>
      </div>
    </div>
  </div>
  <!-- Sub Header -->
  <div class="clearfix"></div>
  <!-- end features Section 01 -->
  
  <div class="section-lg">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="address-info">
            <h2 class="uppercase m-bottom2">Address Info</h2>
            <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
            <br>
            <p>Please be patient while waiting for response. (24/7 Support!) <strong>Phone General Inquiries: +1 (012) 345 6789</strong></p>
            <br>
          </div>
          <!-- end section -->
          
          <div class="address-info">
            <h4 class="uppercase m-bottom2 font-bold">Address Info Two</h4>
            <ul class="address-info map">
              <li><i class="fa fa-map-marker"></i> 15 Barnes Wallis Way, 358744, USA</li>
              <li><i class="fa fa-phone"></i> +1 (012) 345 6789</li>
              <li><i class="fa fa-envelope"></i> info@yourdomain.com</li>
            </ul>
          </div>
          <!-- end section --> 
        </div>
        <div class="col-md-8">
          <h2 class="uppercase">send us a message</h2>
          <form action="demo-contacts-process.php" method="post" id="sky-form" class="sky-form sty-one" novalidate>
				<fieldset class="sty-one">					
					<div class="row">
						<section class="col col-6">
							<label class="label">Name</label>
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input name="name" id="name" type="text">
							</label>
						</section>
						<section class="col col-6">
							<label class="label">E-mail</label>
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
								<input name="email" id="email" type="email">
							</label>
						</section>
					</div>
					
					<section>
						<label class="label">Subject</label>
						<label class="input">
							<i class="icon-append fa fa-tag"></i>
							<input name="subject" id="subject" type="text">
						</label>
					</section>
					
					<section>
						<label class="label">Message</label>
						<label class="textarea">
							<i class="icon-append fa fa-comment"></i>
							<textarea rows="4" name="message" id="message"></textarea>
						</label>
					</section>
					
					<section>
						<label class="label">Enter characters below:</label>
						<label class="input input-captcha">
							<img src="captcha/image.php?<?php echo time(); ?>" alt="Captcha image" width="100" height="35">
							<input maxlength="6" name="captcha" id="captcha" type="text">
						</label>
					</section>
					
					<section>
						<label class="checkbox"><input name="copy" type="checkbox"><i></i>Send a copy to my e-mail address</label>
					</section>
				</fieldset>
				
				<footer>
					<button type="submit" class="button">Send message</button>
				</footer>
				
				<div class="message">
					<i class="fa fa-check"></i>
					<p>Your message was successfully sent!</p>
				</div>
			</form>
        </div>
        <!-- end section --> 
        
      </div>
    </div>
  </div>
  <div class="section-lg">
    <div class="googlemaps embed-container maps">
      <iframe width="425" height="450" class="full-wid" src="https://maps.google.co.in/maps?sll=34.0204989,-118.4117325&amp;sspn=0.8745562,1.4073488&amp;cid=16298491244936825076&amp;q=Los+Angeles,+CA,+USA&amp;ie=UTF8&amp;hq=&amp;hnear=Los+Angeles,+Los+Angeles+County,+California,+United+States&amp;t=m&amp;ll=34.052234,-118.243685&amp;spn=0.697085,0.848982&amp;output=embed" style="pointer-events: none;"></iframe>
    </div>
  </div>
  
  <div class="section-lg bg-grey">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="m-bot-6">
            <h1 class="f-35 font-bold uppercase">Our Best Clients</h1>
            <div class="hr-line blue-color m-bot-2"></div>
            <p>Nam nec tellus a odio tincidunt auctor a ornare odio sed non vitae erat consequat auctor eu<br>
              in elit. Embarrassing hidden chunks as necessary</p>
          </div>
        </div>
        <div id="carousel-example-generic11" class="carousel slide" data-ride="carousel"> 
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic11" data-slide-to="0" class=""></li>
            <li class="active" data-target="#carousel-example-generic11" data-slide-to="1"></li>
          </ol>
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner font-white col-testimonials" role="listbox">
            <div class="item">
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo.png" alt="" class="img-responsive"> </div>
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo1.png" alt="" class="img-responsive"> </div>
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo2.png" alt="" class="img-responsive"> </div>
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo3.png" alt="" class="img-responsive"> </div>
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo4.png" alt="" class="img-responsive"> </div>
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo5.png" alt="" class="img-responsive"> </div>
            </div>
            <div class="item active">
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo.png" alt="" class="img-responsive"> </div>
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo1.png" alt="" class="img-responsive"> </div>
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo2.png" alt="" class="img-responsive"> </div>
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo3.png" alt="" class="img-responsive"> </div>
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo4.png" alt="" class="img-responsive"> </div>
              <div class="col-md-2 col-xs-6 m-bot-2"> <img src="images/c-logo5.png" alt="" class="img-responsive"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end features Section 12 -->
  <footer class="footer black-bg">
    <div class="footer-content">
      <div class="container">
        <div class="row">
          <div class="col-md-3 m-bot-2"> 
            <!-- Footer widget area 1 -->
            <h4 class="uppercase f-15 font-bold white m-bot-3">About Us</h4>
            <ul class="list-icon">
              <li><i class="fa fa-map-marker"></i> 15 Barnes Wallis Way, <br>
                San Francisco, CA 358744</li>
              <li><i class="fa fa-phone"></i> 1 (012) 345 6789</li>
              <li><i class="fa fa-envelope"></i> <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></li>
            </ul>
            <!-- Social icons -->
            <div class="social-icons bor-light">
              <ul>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
            <!-- end: Social icons --> 
            <!-- end: Footer widget area 1 --> 
          </div>
          <div class="col-md-3 m-bot-2"> 
            <!-- Footer widget area 4 -->
            <h4 class="uppercase f-15 font-bold white m-bot-3">Useful Links</h4>
            <div class="row clearfix">
              <div class="col-xs-12 col-sm-6 col-md-6">
                <ul class="list-icon">
                  <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">About Us</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Latest Works</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Our Blog</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">FAQ</a></li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <ul class="list-icon">
                  <li><i class="fa fa-angle-right"></i> <a href="#">Business</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Finance</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Consulting</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Insurance</a></li>
                  <li><i class="fa fa-angle-right"></i> <a href="#">Professional</a></li>
                </ul>
              </div>
            </div>
            <!-- end: Footer widget area 4 --> 
          </div>
          <div class="col-md-3 m-bot-2"> 
            <!-- Footer widget area 2 -->
            <h4 class="uppercase f-15 font-bold white m-bot-3">Latest News</h4>
            <div class="show-post sty-one"><img src="images/img-24.jpg" alt="Image" class="pull-left">
              <div class="post pull-left">
                <h5><a href="blog-details.html" class="tran3s">Web Designing</a></h5>
                <p>13 Feb, 2016  /  Business</p>
              </div>
              <!-- /.post --> 
            </div>
            <div class="show-post sty-one"><img src="images/img-25.jpg" alt="Image" class="pull-left">
              <div class="post pull-left">
                <h5><a href="blog-details.html" class="tran3s">Web Designing</a></h5>
                <p>13 Feb, 2016  /  Business</p>
              </div>
              <!-- /.post --> 
            </div>
            <div class="show-post sty-one"><img src="images/img-26.jpg" alt="Image" class="pull-left">
              <div class="post pull-left">
                <h5><a href="blog-details.html" class="tran3s">Web Designing</a></h5>
                <p>13 Feb, 2016  /  Business</p>
              </div>
              <!-- /.post --> 
            </div>
          </div>
          <div class="col-md-3 m-bot-2"> 
            <!-- Footer widget area 3 -->
            <h4 class="uppercase f-15 font-bold white m-bot-3">News letter</h4>
            <p>Sign up for our mailing list to get latest updates and offers.</p>
            <div class="newsletter-form">
              <form action="#" class="form">
                <div>
                  <input class="form-control" placeholder="Email" required type="email">
                  <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                </div>
              </form>
            </div>
            <!-- end: Footer widget area 3 --> 
          </div>
        </div>
      </div>
    </div>
    <div class="copyright sty-one">
      <div class="container">
        <div class="text-center">Copyright © 2017 yourdomian. All rights reserved.</div>
      </div>
    </div>
  </footer>
  <!-- end footer --> 
  <!-- end site wrapper--> 
</div>
<a href="#" class="scrollup"></a> 
<!-- end scroll to top of the page--> 

<!-- jQuery first, then Tether, then Bootstrap JS. --> 
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<!-- Mega Menu --> 
<script type="text/javascript" src="js/megamenu/js/main.js"></script> 
<script type="text/javascript" src="js/megamenu/js/onepage.js"></script> 

<!-- MasterSlider --> 
<script type="text/javascript" src="js/masterslider/jquery.easing.min.js"></script> 
<script type="text/javascript" src="js/masterslider/masterslider.min.js"></script> 

<!-- load cubeportfolio --> 
<script type="text/javascript" src="js/cubeportfolio/jquery-latest.min.js"></script> 
<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 

<!-- init cubeportfolio --> 
<script type="text/javascript" src="js/cubeportfolio/main10.js"></script> 

<!-- Animations --> 
<script src="js/animations/animations.min.js" type="text/javascript"></script> 
<script src="js/animations/appear.min.js" type="text/javascript"></script> 

<!-- Counters --> 
<script type="text/javascript" src="js/aninum/jquery.animateNumber.min.js"></script> 

<!-- Scroll Up --> 
<script src="js/scrolltotop/totop.js" type="text/javascript"></script>

<!-- contact form --> 
<script type="text/javascript" src="js/form/jquery.min.js"></script>
<script type="text/javascript" src="js/form/jquery.form.min.js"></script> 
<script type="text/javascript" src="js/form/jquery.validate.min.js"></script>
<script type="text/javascript">
(function($) {
  "use strict";
	$(function()
			{
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						message:
						{
							required: true,
							minlength: 10
						},
						captcha:
						{
							required: true,
							remote: 'captcha/process.php'
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name',
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						message:
						{
							required: 'Please enter your message'
						},
						captcha:
						{
							required: 'Please enter characters',
							remote: 'Correct captcha is required'
						}
					},
										
					// Ajax form submition					
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').attr('disabled', true);
							},
							success: function()
							{
								$("#sky-form").addClass('submited');
							}
						});
					},
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});
			})(jQuery);		
		</script>
<!-- disable scroll on map -->
<script>
(function($) {
  "use strict";
// Disable scroll zooming and bind back the click event
var onMapMouseleaveHandler = function (event) {
  var that = $(this);

  that.on('click', onMapClickHandler);
  that.off('mouseleave', onMapMouseleaveHandler);
  that.find('iframe').css("pointer-events", "none");
}

var onMapClickHandler = function (event) {
  var that = $(this);

  // Disable the click handler until the user leaves the map area
  that.off('click', onMapClickHandler);

  // Enable scrolling zoom
  that.find('iframe').css("pointer-events", "auto");

  // Handle the mouse leave event
  that.on('mouseleave', onMapMouseleaveHandler);
}

// Enable map zooming with mouse scroll when the user clicks the map
$('.maps.embed-container').on('click', onMapClickHandler);
})(jQuery);
</script>
</body>
</html>