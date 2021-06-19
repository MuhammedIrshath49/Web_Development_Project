<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Gym</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
                        
<style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
		</head>
		<body>
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row header-top align-items-center">
			    		<div class="col-lg-4 col-sm-4 menu-top-left">
			    			<span>
			    				We believe in helping all people <br>
								achieve a healthy lifestyle
			    			</span>
			    		</div>
			    		<div class="col-lg-4 col-sm-3 menu-top-middle justify-content-center d-flex">
							<a href="index.php">
								<img class="img-fluid" src="img/logo.png" alt="">	
							</a>			    			
			    		</div>
			    		<div class="col-lg-4 col-sm-4 menu-top-right">
			    			<a class="tel" href="tel:+880 123 12 658 439">+65 6879 0679</a>
			    			<a href="tel:+880 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
			    		</div>
                                     <div>
                                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login/ Sign Up</button>

<div id="id01" class="modal">
  
    <form class="modal-content animate" action="server.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" class="loginbtn pull-right">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Are you new to this website? <a href="signup.php">Sign Up</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


                                    </div>
			    	</div>
			    </div>	
			    	<hr>
			    <div class="container">	
			    	<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
                                            <li class="menu-active"><a href="index.php#home">Home</a></li>
                                            <li><a href="index.php#offer">we offer</a></li>
                                            <li><a href="index.php#top-course">Top Course</a></li>				          
                                            <li><a href="index.php#schedule">Schedule</a></li>
                                            <li><a href="index.php#trainer">Trainer/Video</a></li>
                                            <li><a href="index.php#plan">Plan</a></li>
				          <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
                                                <li><a href="generic.php">Contact Us</a></li>
                                                <li><a href="elements.php">Elements</a></li>
                                                <li><a href="aboutus.php">About Us</a></li> 
				            </ul>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<section class="about-generic-area section-gap">
                            
				<div class="container border-top-generic">
					<h1 class="about-title mb-30">Contact Us</h1>
					<div class="row">
                                            <div class="col-lg-12">
                                                <br><br>
                                                <h3>Your Feedback</h3>
                                            </div>
						<div class="col-md-12">
                                                    <form action="server2.php" method="POST" >
							<div class="img-text">
                                                            <br>
                                                            <h5>Consumer Type*</h5>
                                                            <br>
                                                            <input type="radio" value="consumer" name="consumer_type" id="consumer"> Consumer<br>
                                                            <input type="radio" value="business" name="consumer_type" id="business"> Business<br>
							</div>
						</div>
						<div class="col-lg-12">
                                                    <br>
                                                    <h5>Nature of feedback*</h5>
                                                    <select name="nature">
                                                        <option selected="selected"  disabled="disabled" value="" hidden="true">Please select </option>
                                                        <option value="sales"  >Sales Enquiry</option>
                                                        <option value="technical_support" >Technical Support</option>
                                                        <option value="compliments" >Compliments</option>
                                                        <option value="reviews" >Reviews</option>
                                                    </select>
                                                    </div>
						<div class="col-lg-12">
                                                    <br>
                                                    <h5>Work email</h5>
                                                    <input type="text" placeholder="Please enter your email address" name="work_email" size="40">
						</div>
						<div class="col-lg-12">
                                                    <br>
                                                    <h5>Your feedback*</h5>
                                                    <textarea name='fcomments' rows="8" cols="70" placeholder="Please insert your comments here"></textarea>
						</div>
                                                <div>
                                                    <br>
                                                    
                                                    <!-- Use a button to open the snackbar -->
                                                    <button class="primary-btn" onclick="myFunction()">Submit</button>

                                                    <!-- The actual snackbar -->
                                                    <div id="snackbar">Thank you for your response.</div>

                                                </div>
                                             </form>
                                                    
                                </div>
			</section>		
			<!-- End banner Area -->
		
		<!-- About Generic Start -->
		<div class="main-wrapper">
			
			<!-- Start offer Area -->
			<section class="offer-area section-gap" id="offer">
				<div class="container">	
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class=" mb-10">We care about what we offer</h1>
								<p>Providing users with the most effective tactics available for healthy lifestyle.</p>
							</div>
						</div>
					</div>									
					<div class="row">
						<div class="col-lg-4">
							<div class="single-offer">
								<img class="img-fluid" src="img/o1.png" alt="">
								<h4>Regular Exercise</h4>
								<p>
									Disciplined exercise changes the brain to improve memory and thinking skills. Not to mention the reduced risks of catching a disease. So, why don't you start exercising!                                                                       
                                                                        <br>(For more information, click below)<br>
                                                                        <a href="https://www.healthline.com/nutrition/10-benefits-of-exercise" target="_blank">Exercising Benefits</a>
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-offer">
								<img class="img-fluid" src="img/o2.png" alt="">
								<h4>Training on the go</h4>
								<p>
									You’ll need to determine the exact number of reps and rest time yourself, but a good generic formula is to do each set “on the minute.” In other words, rest one minute between sets.
                                                                        <br>(For more information, click below)<br>
                                                                        <a href="https://builtwithscience.com/rest-between-sets/">Training Sets</a>
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-offer">
								<img class="img-fluid" src="img/o3.png" alt="">
								<h4>Body Building Packages</h4>
								<p>
									We know that you’ve always wanted to have that perfect muscular physique. So we're offering you plans inclusive of proper guidance with exercising and diet plans.
                                                                        <br>(For more information, click below)<br>
                                                                        <a href="#top-course">Top Courses</a>
								</p>
							</div>
						</div>												
					</div>
                                    <br><br>
                                        <div class="row">
						<div class="col-lg-4">
							<div class="single-offer">
								<img class="img-fluid" src="img/meal.png" alt="">
								<h4>Consistent Meals</h4>
								<p>
									Ensure you have consume your 3 meals per day. Some people skip breakfast to lose weight, in fact, a healthy breakfast will provide with the nutrients for good health.
                                                                        <br>(For more information, click below)<br>
                                                                        <a href="https://workweeklunch.com/consistent-healthy-lifestyle/">Consistency</a>
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-offer">
								<img class="img-fluid" src="img/salad.png" alt="">
								<h4>Healthy Diet</h4>
								<p>
									Base your meals on higher fibre starchy carbohydrates. Eat lots of vegetables, fruits and fish (including a portion of oily fish). Most importantly, avoid processed foods!
                                                                        <br>(For more information, click below)<br>
                                                                        <a href="https://www.healthline.com/nutrition/healthy-eating-tips">Dieting</a>
								</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-offer">
								<img class="img-fluid" src="img/hydration.png" alt="">
								<h4>Keep Yourself Hydrated</h4>
								<p>
									Drinking fluids is crucial to staying healthy and maintaining the function of every system in your body, including your heart, brain, and muscles. Always drink water when exercising.
                                                                        <br>(For more information, click below)<br>
                                                                        <a href="https://www.health.harvard.edu/staying-healthy/the-importance-of-staying-hydrated">Hydration</a>
								</p>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End offer Area -->			
			<!-- Start Generic Area -->
			<!-- End Generic Start -->		

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<a href="aboutus.php"><h4>About Us</h4></a> 
			
                                                                <p>
                                                                        We are a trio of gym freaks intent on providing a platform for fellow exercise enthusiasts to express their love for fitness on and figure out 
                                                                        various aspects of their physical fitness, like their diets, training regimens etc.. We hope you enjoy our website and all the various services it has to offer.
                                                                                                                                                                                                                        
                                                                </p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<a href="generic.php"><h4>Contact Us</h4></a>
								<p>
									You can contact our members at the following numbers should you have any inquiries regarding physical fitness or the website. 
								</p>
								<p class="number">
									+65 9875 5910 <br>
                                                                        +65 9731 5531 <br> 
                                                                        +65 9832 9870 <br>
								</p>
							</div>
						</div>						
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">


                                                                    <form class="navbar-form" novalidate="true" action="server3.php" method="POST">
									    <div class="input-group add-on">
									      	<input class="form-control" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
											<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
									      <div class="input-group-btn">
									        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>									    
									  </form>
								</div>
							</div>
						</div>						
					</div>
					<div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
						<p class="footer-text m-0">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="footer-social d-flex align-items-center">
							<a href="https://www.facebook.com/alsen.jacko" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/YNOPodcast" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://dribbble.com/signup/new" target="_blank"><i class="fa fa-dribbble"></i></a>
							<a href="https://www.behance.net/search/?search=healthy%20diet" target="_blank"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->
			
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/mail-script.js"></script>				
			<script src="js/main.js"></script>
                        <script>
                            function myFunction() {
                            var x = document.getElementById("snackbar");
                            x.className = "show";
                            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                            }
                        </script>
		</body>
	</html>
