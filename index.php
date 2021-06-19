<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);

* {
  margin: 0;
  padding: 0;
  font-family: roboto;
}

body { background: #000; }

.cont {
  width: 93%;
  max-width: 350px;
  text-align: center;
  margin: 4% auto;
  padding: 30px 0;
  background: #111;
  color: #EEE;
  border-radius: 5px;
  border: thin solid #444;
  overflow: hidden;
}

hr {
  margin: 20px;
  border: none;
  border-bottom: thin solid rgba(255,255,255,.1);
}

div.title { font-size: 2em; }

h1 span {
  font-weight: 300;
  color: #Fd4;
}

div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>
                <!-- Optimal Internet Explorer compatibility for paypal -->
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- optimal rendering on mobile devices -->
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
                <link rel="stylesheet" type="text/css" href="style.css">
		<title>Gym</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
                                             
<script>  
    
    //This is for setting the expiry date in terms of minutes (1 minute here)
function setCookie(cname,cvalue,exminutes) {
  var d = new Date();
  var exminutes=1;
  d.setTime(d.getTime() + (exminutes*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var user=getCookie("username");
  if (user == "") {
      user = prompt("Please enter your name:",""); 
  } else {
      alert("Welcome again " + user);
  }
     if (user != "" && user != null) {
       setCookie("username", user, 1);
     }
  }
  
         
</script>
<script type="text/javascript">
            function computeBMI()
            {
            //Obtain user inputs
            var height=Number(document.getElementById("height").value);
            var heightunits="inches";
            var weight=Number(document.getElementById("weight").value);
            var weightunits="lb";


            //Convert all units to metric
            if (heightunits=="inches") height/=39.3700787;
            if (weightunits=="lb") weight/=2.20462;

            //Perform calculation
            var BMI=weight/Math.pow(height,2);

            //Display result of calculation
            document.getElementById("output").innerText=Math.round(BMI*100)/100;

            var output =  Math.round(BMI*100)/100
            if (output<18.5)
            document.getElementById("comment").innerText = "Underweight";
            else   if (output>=18.5 && output<=25)
              document.getElementById("comment").innerText = "Normal";
            else   if (output>=25 && output<=30)
               document.getElementById("comment").innerText = "Obese";
            else   if (output>30)
               document.getElementById("comment").innerText = "Overweight";
              // document.getElementById("answer").value = output; 
            }
</script>
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
			    		<div class="col-lg-4 menu-top-middle justify-content-center d-flex">
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
			    	<hr>
			    <div class="container">	
			    	<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#home">Home</a></li>
				          <li><a href="#offer">we offer</a></li>
				          <li><a href="#top-course">Top Course</a></li>				          
				          <li><a href="#schedule">Schedule</a></li>
				          <li><a href="#trainer">Trainer/Video</a></li>
				          <li><a href="#plan">Plan</a></li>
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

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>		
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-12 col-md-12">
							<h1 class="text-uppercase">
								Real Fitness <br>
								Depends on Exercise					
							</h1>
							<p class="text-white text-uppercase pt-20 pb-20">
								Shape your body well, physical health is paramount,your body is irreplaceable.
							</p>
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

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
			
			<!-- Start convert Area -->
			<section class="convert-area" id="convert">
                           
				<div class="container">
					<div class="convert-wrap">
						<div class="row d-flex justify-content-center">
							<div class="menu-content pb-70 col-lg-8">
								<div class="title text-center">
									<h1 class="text-white mb-10">Calculate Your Body Mass Index</h1>
									<p class="text-white">Providing users with the most effective tactics available for healthy lifestyle.</p>
								</div>
							</div>
						</div>	
                                            
                                            
						<div class="row justify-content-center align-items-start">  
                                                        <div>
                                                            <input type='text' id='bminame' placeholder='Your Name' class='form-control mb-20' name="name">
                                                        </div>
							<div class="col-lg-3 col-md-6 cols-img">
                                                            <input type="text" id="height" placeholder="Your Height (inches)" class="form-control mb-20" name="height">
                                                        </div>
							<div class="col-lg-3 col-md-6 cols">
                                                            <input type="text" id="weight" placeholder="Your Weight (lbs)" class="form-control mb-20" name="weight">
                                                        </div>
							<div class="col-lg-3 col-md-6 cols">
								<a onclick="computeBMI();" class="primary-btn header-btn text-uppercase">Calculate Your BMI</a>
							</div>
                                                    
                                                    
                                                    <pre style="overflow:hidden;">
                                                    <br><br><h2 style="color:white;">This means you are: <span id="comment" name="comment"></span></h2> 
                                                    
                                                    <br><br><h2 style="color:white;">Your BMI is: <span id="output" name="output"></span></h2>
                                                    </pre>
                                                
						</div>
					</div>
				</div>
                           
			</section>
			<!-- End convert Area -->

			<!-- Start top-course Area -->
			<section class="top-course-area section-gap" id="top-course">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Top Courses That are open for Enthusiasts</h1>
								<p>Providing users with the most effective tactics available for healthy lifestyle.</p>
							</div>
						</div>
					</div>											
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c1.jpg" alt="">
								</div>
								<span class="course-status">Course Available</span>
								<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZKYWWLB6W6PF8"><h4>Running Classes <span>$275</span></h4></a>
                                                                <div class="rate">
                                                                    <form action="server6.php" method="POST">
                                                                        <input class="star star-5" id="star-5" value="5" type="radio" name="star"/>
                                                                <label class="star star-5" for="star-5"></label>
                                                                <input class="star star-4" id="star-4" type="radio" value="4" name="star"/>
                                                                <label class="star star-4" for="star-4"></label>
                                                                <input class="star star-3" id="star-3" type="radio" value="3" name="star"/>
                                                                <label class="star star-3" for="star-3"></label>
                                                                <input class="star star-2" id="star-2" type="radio" value="2" name="star"/>
                                                                <label class="star star-2" for="star-2"></label>
                                                                <input class="star star-1" id="star-1" type="radio" value="1" name="star"/>
                                                                <label class="star star-1" for="star-1"></label>
                                                                </form>
                                                                </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c2.jpg" alt="">
								</div>
								<span class="course-status">Course Available</span>
								<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MQVNJVN4WZVHL"><h4>Weight Lifting Classes <span>$200</span></h4></a>
                                                                <div class="rate">
                                                                    <form action="server6.php" method="POST">
                                                                <input class="star star-5" id="star-5-2" type="radio" value="5" name="star"/>
                                                                <label class="star star-5" for="star-5-2"></label>
                                                                <input class="star star-4" id="star-4-2" type="radio" value="4" name="star"/>
                                                                <label class="star star-4" for="star-4-2"></label>
                                                                <input class="star star-3" id="star-3-2" type="radio" value="3" name="star"/>
                                                                <label class="star star-3" for="star-3-2"></label>
                                                                <input class="star star-2" id="star-2-2" type="radio" value="2" name="star"/>
                                                                <label class="star star-2" for="star-2-2"></label>
                                                                <input class="star star-1" id="star-1-2" type="radio" value="1" name="star"/>
                                                                <label class="star star-1" for="star-1-2"></label>
                                                                </form>
                                                                </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c3.jpg" alt="">
								</div>
								<span class="course-status">Course Available</span>
								<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VP8V48KCP2CYU"><h4>Body Combat Classes <span>$225</span></h4></a>
                                                                <div class="rate">
                                                                    <form action="server6.php" method="POST">
                                                                <input class="star star-5" id="star-5-3" type="radio" value="5" name="star"/>
                                                                <label class="star star-5" for="star-5-3"></label>
                                                                <input class="star star-4" id="star-4-3" type="radio" value="4" name="star"/>
                                                                <label class="star star-4" for="star-4-3"></label>
                                                                <input class="star star-3" id="star-3-3" type="radio" value="3" name="star"/>
                                                                <label class="star star-3" for="star-3-3"></label>
                                                                <input class="star star-2" id="star-2-3" type="radio" value="2" name="star"/>
                                                                <label class="star star-2" for="star-2-3"></label>
                                                                <input class="star star-1" id="star-1-3" type="radio" value="1" name="star"/>
                                                                <label class="star star-1" for="star-1-3"></label>
                                                                </form>
                                                                </div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c4.jpg" alt="">
								</div>
								<span class="course-status">Course Available</span>
								<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MXT9W8EEGWGJ6"><h4>Organic Yoga Classes <span>$300</span></h4></a>
                                                                <div class="rate">
                                                                    <form action="server6.php" method="POST">
                                                                <input class="star star-5" id="star-5-4" type="radio" value="5" name="star"/>
                                                                <label class="star star-5" for="star-5-4"></label>
                                                                <input class="star star-4" id="star-4-4" type="radio" value="4" name="star"/>
                                                                <label class="star star-4" for="star-4-4"></label>
                                                                <input class="star star-3" id="star-3-4" type="radio" value="3" name="star"/>
                                                                <label class="star star-3" for="star-3-4"></label>
                                                                <input class="star star-2" id="star-2-4" type="radio" value="2" name="star"/>
                                                                <label class="star star-2" for="star-2-4"></label>
                                                                <input class="star star-1" id="star-1-4" type="radio" value="1" name="star"/>
                                                                <label class="star star-1" for="star-1-4"></label>
                                                                </form>
                                                                </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c5.jpg" alt="">
								</div>
								<span class="course-status">Course Available</span>
								<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZT8QGP6E3HL3N"><h4>Raw Fitness Classes <span>$500</span></h4></a>
                                                                <div class="rate">
                                                                    <form action="server6.php" method="POST">
                                                                <input class="star star-5" id="star-5-5" type="radio" value="5" name="star"/>
                                                                <label class="star star-5" for="star-5-5"></label>
                                                                <input class="star star-4" id="star-4-5" type="radio" value="4" name="star"/>
                                                                <label class="star star-4" for="star-4-5"></label>
                                                                <input class="star star-3" id="star-3-5" type="radio" value="3" name="star"/>
                                                                <label class="star star-3" for="star-3-5"></label>
                                                                <input class="star star-2" id="star-2-5" type="radio" value="2" name="star"/>
                                                                <label class="star star-2" for="star-2-5"></label>
                                                                <input class="star star-1" id="star-1-5" type="radio" value="1" name="star"/>
                                                                <label class="star star-1" for="star-1-5"></label>
                                                                </form>
                                                                </div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-course">
								<div class="thumb">
									<img class="img-fluid" src="img/c6.jpg" alt="">
								</div>
								<span class="course-status">Course Available</span>
								<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=TN9RWSAGJJ2WL"><h4>Body Building Classes <span>$250</span></h4></a>
                                                                <div class="rate">
                                                                    <form action="server6.php" method="POST">
                                                                <input class="star star-5" id="star-5-6" type="radio" value="5" name="star"/>
                                                                <label class="star star-5" for="star-5-6"></label>
                                                                <input class="star star-4" id="star-4-6" type="radio" value="4" name="star"/>
                                                                <label class="star star-4" for="star-4-6"></label>
                                                                <input class="star star-3" id="star-3-6" type="radio" value="3" name="star"/>
                                                                <label class="star star-3" for="star-3-6"></label>
                                                                <input class="star star-2" id="star-2-6" type="radio" value="2" name="star"/>
                                                                <label class="star star-2" for="star-2-6"></label>
                                                                <input class="star star-1" id="star-1-6" type="radio" value="1" name="star"/>
                                                                <label class="star star-1" for="star-1-6"></label>
                                                                </form>
                                                                </div>
							</div>
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End top-course Area -->
							

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container-fluid">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-3 feat-img no-padding">
							<img class="img-fluid" src="img/f1.jpg" alt="">
						</div>
						<div class="col-lg-3 no-padding feat-txt">
							<h6 class="text-uppercase text-white">The workout mindset</h6>
							<h1>Mindset Hacks</h1>
							<p>
								The mind is a powerful tool that is underutilized in most fitness regimens. In order to see the results of your training, give yourself a deadline, so that you'll get it done by the end of the day.
							</p>
						</div>
						<div class="col-lg-3 feat-img no-padding">
							<img class="img-fluid" src="img/Diet.jpg" alt="">							
						</div>
						<div class="col-lg-3 no-padding feat-txt">
							<h6 class="text-uppercase text-white">The Healthier Choice</h6>
							<h1>Eating habits</h1>
							<p>
								With all the food to choose from daily, it helps when we make the right choices to stay well-nourished. No single food can provide all the nutrients your body needs - You'll need a wider variety, taken in moderation, in the right balance, daily.
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End feature Area -->

			<!-- Start schedule Area -->
			<section class="schedule-area section-gap" id="schedule">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Schedule your Fitness Process</h1>
								<p>Providing users with the most effective tactics available for healthy lifestyle.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="table-wrap col-lg-12">
							<table class="schdule-table table table-bordered">
								  <thead class="thead-light">
								    <tr>
								      <th class="head" scope="col">Course name</th>
								      <th class="head" scope="col">mon</th>
								      <th class="head" scope="col">tue</th>
								      <th class="head" scope="col">wed</th>
								      <th class="head" scope="col">thu</th>
								      <th class="head" scope="col">fri</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th class="name" scope="row">Running Classes</th>
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								      <td>10.00 <br> 02.00</td>				      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Weight Lifting Classes</th>
								      <td>11.00 <br> 01.00</td>				      
								      <td>11.00 <br> 01.00</td>				      
								      <td>11.00 <br> 01.00</td>				      
								      <td>11.00 <br> 01.00</td>				      
								      <td>11.00 <br> 01.00</td>						      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Body Combat Classes</th>
								      <td>09.00 <br> 01.30</td>				      
								      <td>09.00 <br> 01.30</td>				      
								      <td>09.00 <br> 01.30</td>				      
								      <td>09.00 <br> 01.30</td>				      
								      <td>09.00 <br> 01.30</td>							      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Organic Yoga Classes</th>
								      <td>08.00 <br> 12.00</td>				      
								      <td>08.00 <br> 12.00</td>				      
								      <td>08.00 <br> 12.00</td>				      
								      <td>08.00 <br> 12.00</td>				      
								      <td>08.00 <br> 12.00</td>								      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Raw Fitness Classes</th>
								      <td>08.30 <br> 02.00</td>				      
								      <td>08.30 <br> 02.00</td>				      
								      <td>08.30 <br> 02.00</td>				      
								      <td>08.30 <br> 02.00</td>				      
								      <td>08.30 <br> 02.00</td>						      
								    </tr>
								    <tr>
								      <th class="name" scope="row">Body Building Classes</th>
								      <td>10.00 <br> 01.30</td>				      
								      <td>10.00 <br> 01.30</td>				      
								      <td>10.00 <br> 01.30</td>				      
								      <td>10.00 <br> 01.30</td>				      
								      <td>10.00 <br> 01.30</td>						      
								    </tr>							    							    							    							    
								  </tbody>
							</table>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End schedule Area -->
			
			
			<!-- Start team Area -->
			<section class="team-area section-gap" id="trainer">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Our Experienced Trainers</h1>
								<p>Providing users with the most effective tactics available for healthy lifestyle.</p>
							</div>
						</div>
					</div>						
					<div class="row justify-content-center d-flex align-items-center">
						<div class="col-md-3 single-team">
						    <div class="thumb">
						        <img class="img-fluid" src="img/t1.jpg" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="https://www.facebook.com/ethel.davis.144181" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/ethelda67146071" target="_blank"><i class="fa fa-twitter"></i></a>
									<a href="https://www.instagram.com/nadiaetheldavis/" target="_blank"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Ethel Davis</h4>
							    <p>Managing Director (Sales)</p>									    	
						    </div>
						</div>
						<div class="col-md-3 single-team">
						    <div class="thumb">
						        <img class="img-fluid" src="img/t2.jpg" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="https://www.facebook.com/rodneycooperfilmz/" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/10coop07" target="_blank"><i class="fa fa-twitter"></i></a>
									<a href="https://www.instagram.com/lenscooper/" target="_blank"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Rodney Cooper</h4>
							    <p>Creative Art Director (Project)</p>			    	
						    </div>
						</div>	
						<div class="col-md-3 single-team">
						    <div class="thumb">
						        <img class="img-fluid" src="img/t3.jpg" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="https://www.facebook.com/profile.php?id=100006063091737" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/search?q=Dora%20Walker&src=typed_query" target="_blank"><i class="fa fa-twitter"></i></a>
									<a href="https://www.instagram.com/lex.texaspam/" target="_blank"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Dora Walker</h4>
							    <p>Senior Core Developer</p>			    	
						    </div>
						</div>	
						<div class="col-md-3 single-team">
						    <div class="thumb">
						        <img class="img-fluid" src="img/t4.jpg" alt="">
						        <div class="align-items-center justify-content-center d-flex">
									<a href="https://www.facebook.com/leo.keller.9066" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/leo68nl" target="_blank"><i class="fa fa-twitter"></i></a>
									<a href="https://www.instagram.com/keller.leo/" target="_blank"><i class="fa fa-linkedin"></i></a>
						        </div>
						    </div>
						    <div class="meta-text mt-30 text-center">
							    <h4>Lena Keller</h4>
							    <p>Creative Content Developer</p>			    	
						    </div>
						</div>																		
					</div>
                                    <br><br>
                                    <div class="title text-center">
					<h1 class="mb-10">To help you better understand how to acheive a healthy lifestyle, our YouTube partners can show you videos on just how to do that!</h1>
                                    </div>
                                    <div>
                                        <br><br><br><p style='font-size:30px;'>This is what you can expect to do for a workout devised by us!</p>
                                        <iframe width="950" height="480" src="https://www.youtube.com/embed/UBMk30rjy0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <br><br><br><p style='font-size:30px;'>This is what you can expect from a diet devised by us!</p>
                                        <iframe width="950" height="480" src="https://www.youtube.com/embed/Gr7RP4GQM2c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <br><br><br><p style='font-size:30px;'>This is what you can expect to do to remain mentally healthy!</p>
                                        <iframe width="950" height='480' src="https://www.youtube.com/embed/hJbRpHZr_d0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
				</div>	
			</section>
			<!-- End team Area -->	

			<!-- Start price Area -->
			<section class="price-area pt-100" id="plan">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Choose the Perfect Plan for you</h1>
								<p>Providing users with the most effective tactics available for healthy lifestyle.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-4">
							<div class="single-price">
								<div class="top-sec d-flex justify-content-between">
									<div class="top-left">
										<h4>Standard</h4>
                                                                                <p>For the <br>individuals</p>
                                                                               
									</div>
									<div class="top-right">
										<h1>$99</h1>
									</div>
								</div>
                                                            
								<div class="bottom-sec">
									<p>
                                                                            A few have the courage to take the first of many steps <br>
                                                                            regarding their fitness.
									</p>
								</div>
								<div class="end-sec">
									<ul>
										<li>14 hours per week</li>
										<li>Dedicated training consultant</li>
                                                                                <li>Array of facilities<br>
                                                                                and equipment</li>
                                                                                <li>Theory-crafting on personal regimen</li>
                                                                                <li>Education on all aspects of fitness and health,<br>
                                                                                    both dietary and physical alike</li>
									
									</ul>
									<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=J8GTHY4RMYTT6" class="primary-btn price-btn mt-20">Purchase Plan<span class="lnr lnr-arrow-right"></span></a>
                                                                        
								</div>								
							</div> 
						</div>
						<div class="col-lg-4">
							<div class="single-price">
								<div class="top-sec d-flex justify-content-between">
									<div class="top-left">
										<h4>Groups</h4>
                                                                                <p>For <br>groups of friends<br> or close associates<br> (<=5 people)</p>
									</div>
									<div class="top-right">
										<h1>$399</h1>
									</div>
								</div>
								<div class="bottom-sec">
									<p>
                                                                            You and co. are determined to undertake<br>
                                                                            the challenge of physical fitness together. 
									</p>
								</div>
								<div class="end-sec">
									<ul>
										<li>50 hours per week for each group</li>
										<li>Dedicated training consultant</li>
                                                                                <li>Array of facilities<br>
                                                                                    and equipment</li>
										<li>Reliable Customer Service</li>
										<li>Group education sessions</li>
									</ul>
									<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=CC99X5F982CE2" class="primary-btn price-btn mt-20">Purchase Plan<span class="lnr lnr-arrow-right"></span></a>
								</div>								
							</div> 
						</div>	
						<div class="col-lg-4">
							<div class="single-price">
								<div class="top-sec d-flex justify-content-between">
									<div class="top-left">
										<h4>Companies</h4>
                                                                                <p>For<br> large companies<br> with fitness plans</p>
									</div>
									<div class="top-right">
										<h1>$499</h1>
									</div>
								</div>
								<div class="bottom-sec">
									<p>
                                                                            You look out for your employees and ensure their well being<br>
                                                                            and health. 
									</p>
								</div>
								<div class="end-sec">
									<ul>
										<li>125 hours per company</li>
										<li>Dedicated training consultants</li>
                                                                                <li>Array of facilities<br>
                                                                                    and equipment</li>
										<li>Reliable Customer Service</li>
                                                                                <li>Dedicated material for<br>training regimen</li>
                                                                                <li>Mass workout sessions</li>
									</ul>
									<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=G7VLZHS89UHA6" class="primary-btn price-btn mt-20">Purchase Plan<span class="lnr lnr-arrow-right"></span></a>
								</div>								
							</div> 
						</div>							
																						
					</div>
				</div>	
			</section>
			<!-- End price Area -->			

			<!-- Start brand Area -->
			<section class="brand-area section-gap">
				<div class="container">
					<div class="row logo-wrap">
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/l1.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/l2.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/l3.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/l4.png" alt="">
							</a>
							<a class="col single-img" href="#">
								<img class="d-block mx-auto" src="img/l5.png" alt="">
							</a>
					</div>	
				</div>	
			</section>
			<!-- End brand Area -->		

			<!-- Start callto Area -->
			<section class="callto-area section-gap relative">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<h1 class="text-white">Being a member is just a click away</h1>
							<p class="text-white pt-20 pb-20">
								What you stand to gain from becoming a member is the exceptional health benefits at the end of the day <br> Stay healthy, Stay strong. What is there to hesitate? Be a part of our team!
							</p>
                                                        <a class="primary-btn" href="signup.php">Become a Member</a>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End callto Area -->

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


									  <form class="navbar-form" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
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
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-6">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="footer-social col-lg-6">
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
                        
                        <body onload="checkCookie()"></body>
		</body>
	</html>