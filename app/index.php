<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Transcribersnet App </title>
	<meta name="description" content="Wiredwiki App">
	<!-- Latest compiled and minified CSS -->
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

	<style>
	body{
		margin-top: 40px;
	}
	
	


body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

	</style>

	 <?php
	 session_start();
     $con=mysqli_connect("localhost","root","","audiotrans");
	

  //for automatically to dash board of repectively
    if(isset($_SESSION['user_role'])) {

        if($_SESSION['user_role'] == 'admin') {
              header("location: Admin/welcome.php");
        }

        else if($_SESSION['user_role'] == 'company') {
              header("location: Company/welcome.php");
        }
        else if($_SESSION['user_role'] == 'candidate') {
              header("location: Candidate/welcome.php");
        }
      }




          // for login of candidate
	if(isset($_POST['login'])){
      // username and password sent from form 
     
      $myusername = $_POST['email_id'];
      $mypassword = $_POST['password']; 
      

      $sql = "SELECT user_id FROM users WHERE user_email = '$myusername' and user_password = '$mypassword' and user_role='candidate'";
    
      $result = mysqli_query($con,$sql);
    
	while($row_product=mysqli_fetch_array($result)){


  $user_id=$row_product['user_id'];
  }
      
    
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(mysqli_num_rows($result) ==1) {
      

		      $_SESSION['user_id'] = $user_id;
         $_SESSION['login_user'] = $myusername;
           $_SESSION['user_role'] = 'candidate';
           header("location: Candidate/welcome.php");
        
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   if(isset($_POST['signup'])){
      // username and password sent from form 
      
      $myusername = $_POST['name'];
      $email = $_POST['email']; 
      
     
		
         $_SESSION['login_user'] = $myusername;
		 $_SESSION['email']=$email;
         
         header("location: SelectionProcess/index.php");
     
   }
   
   ?>
<body data-spy="scroll" data-target="#my-navbar">

  <!-- Navbar -->
  	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>

  				<a href="" class="navbar-brand">Transcribersnet</a>
  			</div><!-- Navbar Header-->
  			<div class="collapse navbar-collapse" id="navbar-collapse">
  				
  			<a onclick="document.getElementById('id01').style.display='block'" class="btn btn-warning navbar-btn navbar-right">Login</a>
			<a onclick="document.getElementById('id02').style.display='block'" class="btn btn-warning navbar-btn navbar-right">SignUp</a>
  				<ul class="nav navbar-nav">
					<li><a href="Admin">Admin</a></li>
  					<li><a href="Company">Company</a></li>
					<li><a href="#how_it_work">How it work</a></li>
  					<li><a href="#feedback">Feedback</a> </li>
  					<li><a href="#gallery">Gallery</a> </li>
  					<li><a href="#features">Features</a> </li>
  					<li><a href="#faq">Faq</a></li>
					
					<li><a href="#subscribe">Subscribe</a></li>
					
					    
  					<li><a href="#contact">ContactUs</a> </li>
  				</ul>
				
				
				
				


			
  			</div>
  		</div><!-- End Container-->
  	</nav><!-- End navbar -->

  	<!-- jumbotron-->

  	<div class="jumbotron">
	<!--created on 2/8/18-->
				<!-- Button to open the modal login form and signup form -->

            <!-- The Modal for signup page -->
<div id="id02" class="modal">
  

  <!-- Modal Content -->
  <form method="post" class="modal-content animate">
   
<span onclick="document.getElementById('id02').style.display='none'" 
class="close" title="Close Modal">&times;</span>
    <div class="container">
     
	  <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
	  
     
	  <label for="email"><b>Email id</b></label>
      <input type="text" placeholder="Enter Email id" name="email" required>

      <button type="submit" value = "submit" name="signup">Start Transcribing</button>
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button"  onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>
				
				
<!-- The Modal for login page -->
<div id="id01" class="modal">
  

  <!-- Modal Content -->
  <form method="post" class="modal-content animate" >
   
   <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

    <div class="container">
      <label for="emailid"><b>Email Id</b></label>
      <input type="text" placeholder="Enter Email id" name="email_id" required >

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" value = "submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


			
<!-- end of login made button -->
  		<div class="container text-center">
  			<h1>Transcribersnet</h1>
  			<p>Transcribe saves precious hours every month in transcription time for doctors,journalists,buisnessmen, lawyers and students all over the world.</p>

  			<div class="btn-group">
  				<a href="#gallery" class="btn btn-lg btn-warning">Visit Gallery</a>
  				<a onclick="document.getElementById('id02').style.display='block'" class="btn btn-lg btn-default">Start Transcribing Now</a>
  				<a href="#features" class="btn btn-lg btn-warning">Features</a>
  			</div>
  		</div><!-- End container -->
  	</div><!-- End jumbotron-->
	
	
	<!-- Feedback-->
  	<div class="container">
  		<section>
  			<div class="page-header" id="how_it_work">
  				<h2>Work.<small> Check out how it works</small></h2>
				<img src="how.jpeg" alt="Text of the image">
  			</div>
			
				</section>
  	</div><!--End Container-->

  	<!-- Feedback-->
  	<div class="container">
  		<section>
  			<div class="page-header" id="feedback">
  				<h2>Feedback.<small> Check out the Awesome Feedback</small></h2>
  			</div>

  			<div class="row">
  				<div class="col-md-4">
  					<blockquote>
  						<p>This site is great as it has easy for audio management</p>
  						<footer>John</footer>
  					</blockquote>
  				</div>
  				<div class="col-md-4">
  					<blockquote>
  						<p>It is highly fast for audio conversion</p>
  						<footer>John</footer>
  					</blockquote>
  				</div>
  				<div class="col-md-4">
  					<blockquote>
  						<p>Higly skill people , the text are very accurate</p>
  						<footer>John</footer>
  					</blockquote>
  				</div>
  			</div><!-- End row -->
  		</section>
  	</div><!--End Container-->

<!-- call to action -->
	<section>
		<div class="well">
			<div class="container text-center" id="subscribe">
				<h3>Subscribe for free for join our mailing list and receive discount coupons</h3>
				<p>Enter your name and email</p>

				<form action="lib/Mailchimp/index.php" name="postForm" class="form-inline" method="POST" >
					<div class="form-group">
						<label for="subscription">Name</label>
						<input type="text" class="form-control" id="subscription" placeholder="Your name">
					</div>
					<div class="form-group">
						<label for="email">Email address</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email">
					</div>
					<button type="submit" class="btn btn-default">Subscribe</button>
					<hr>
				</form>


			</div><!-- end Container-->

		</div><!-- end well-->
	</section><!-- Call to action -->

<!-- Gallery -->
	<div class="container">
		<section>
			<div class="page-header" id="gallery">
  				<h2>Gallery.<small> Check out the Awesome Gallery</small></h2>
  			</div>

  			<div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
  				<ol class="carousel-indicators">
  					<li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
  					<li data-target="#screenshot-carousel" data-slide-to="1"></li>
  					<li data-target="#screenshot-carousel" data-slide-to="2"></li>
  					<li data-target="#screenshot-carousel" data-slide-to="3"></li>
  				</ol>
  				<div class="carousel-inner">
  					<div class="item active">
  						<img src="highway.jpg" alt="Text of the image">
  						<div class="carousel-caption">
  							<h3>Highway heading</h3>
  							<p>This is the caption</p>
  						</div>
  					</div>
  					<div class="item">
  						<img src="river.jpg" alt="Text of the image">
  						<div class="carousel-caption">
  							<h3>River heading</h3>
  							<p>This is the caption</p>
  						</div>
  					</div>
  					<div class="item">
  						<img src="street.jpg" alt="Text of the image">
  						<div class="carousel-caption">
  							<h3>Street heading</h3>
  							<p>This is the caption</p>
  						</div>
  					</div>
  					<div class="item">
  						<img src="painting.jpg" alt="Text of the image">
  						<div class="carousel-caption">
  							<h3>Painting heading</h3>
  							<p>This is the caption</p>
  						</div>
  					</div>

  				</div><!-- End Carousel inner -->
  				<a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
  					<span class="glyphicon glyphicon-chevron-left"></span>
  				</a>
  				<a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
  					<span class="glyphicon glyphicon-chevron-right"></span>
  				</a>
  			</div><!-- End Carousel -->

		</section>
	</div>

<!-- features -->
	<div class="container">
		<section>
			<div class="page-header" id="features">
  				<h2>Features.<small> Some of the coolest Features of this app.</small></h2>
  			</div><!-- End Page Header -->

  			<div class="row">
  				<div class="col-sm-8">
  					<h3>Client  management</h3>
  					<p>There is highly transperency in us</p>
  				</div>
  				<div class="col-sm-4">
  					<img src="Client-Management.jpg" class="img-responsive" alt="image">
  				</div>
  			</div><!-- End row -->
  			<div class="row">
  				<div class="col-sm-8">
  					<h3>Friendly User Interface</h3>
  					<p>Our website have friendly user interface. It has easy layout</p>
  				</div>
  				<div class="col-sm-4">
  					<img src="imac.jpg" class="img-responsive" alt="image">
  				</div>
  			</div>
  			<div class="row">
  				<div class="col-sm-8">
  					<h3>Transition management</h3>
  					<p>Here we can see transition management</p>
  				</div>
  				<div class="col-sm-4">
  					<img src="transcibers.jpg" class="img-responsive" alt="image">
  				</div>
  			</div>
			<div class="row">
  				<div class="col-sm-8">
  					<h3>Consultancy of proof readers</h3>
  					<p>We can see consultancy of proof readers</p>
  				</div>
  				<div class="col-sm-4">
  					<img src="proof reading.jpg" class="img-responsive" alt="image">
  				</div>
  			</div>
			<div class="row">
  				<div class="col-sm-8">
  					<h3>Ease of payment</h3>
  					<p>You dont have to worry about payment, there is ease of payment</p>
  				</div>
  				<div class="col-sm-4">
  					<img src="ease_of_payment.jpg" class="img-responsive" alt="image">
  				</div>
  			</div>

  			<hr>

  			<div class="row">
  				<div class="col-sm-4">
  					<div class="panel panel-default text-center">
  						<div class="panel-body">
  							<span class="glyphicon glyphicon-ok"></span>
  							<h4>Security of data</h4>
  							<p>Your data will be secure in our server.We used highly secured server</p>
  						</div>
  					</div>
  				</div>

  				<div class="col-sm-4">
  					<div class="panel panel-default text-center">
  						<div class="panel-body">
  							<span class="glyphicon glyphicon-star"></span>
  							<h4>Minimize manual data entry</h4>
  							<p>You have to provide milimum button click for the audio transcription</p>
  						</div>
  					</div>
  				</div>

  				<div class="col-sm-4">
  					<div class="panel panel-default text-center">
  						<div class="panel-body">
  							<span class="glyphicon glyphicon-play-circle"></span>
  							<h4>Minimum time requirement</h4>
  							<p>Our expert will perform the audio transcription in minimum time</p>
  						</div>
  					</div>
  				</div>
  			</div><!-- end row -->

		</section>
	</div><!-- End Container -->

<!-- Faq -->

    <div class="container">
      <section>
        <div class="page-header" id="faq">
          <h2>FAQ.<small> Engaging with consumers.</small></h2>
        </div><!-- End Page Header -->

        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title">
                <a href="#collapse-1" data-toggle="collapse" data-parent="#accordion">
                 Does Transcribe automatically convert audio to text?
                </a>
              </div><!-- End panel title -->
              <div id="collapse-1" class="panel-collapse collapse in">
                <div class="panel-body">
                 Since the technology is not so advance that automatic audio trancribition is possible several various research are done on this. But 100% current result is not possible even the google translet which is automatic have various bugs which is not sutable for audio transition.For example some one have name "प्रशांत मौर्य"  in hindi if we do this for google transcription it would say Pacific maurya not prasant maurya.
                </div>
              </div><!-- End Panel collapse -->
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title">
                <a href="#collapse-2" data-toggle="collapse" data-parent="#accordion">
                  How much does Transcribe cost?
                </a>
              </div><!-- End panel title -->
              <div id="collapse-2" class="panel-collapse collapse">
                <div class="panel-body">
                 Transcribe costs US $xx for an annual license
                </div>
              </div><!-- End Panel collapse -->
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title">
                <a href="#collapse-3" data-toggle="collapse" data-parent="#accordion">
                How should I cancel my account?
                </a>
              </div><!-- End panel title -->
              <div id="collapse-3" class="panel-collapse collapse">
                <div class="panel-body">
                  You can cancel from the account option
                </div>
              </div><!-- End Panel collapse -->
            </div>
          </div>
        </div><!-- End panel group -->

      </section>
    </div><!-- End container -->


<!-- Contact -->

  <div class="container">
    <section>
      <div class="page-header" id="contact">
          <h2>Contact Us.<small> Contact us for more.</small></h2>
        </div><!-- End Page Header -->

        <div class="row">
          <div class="col-lg-4">
            <p>Send us a message, or contact us from the address below</p>


            <address>
              <strong>address headre.</strong></br>
             delhi </br>
              Plot</br>
              New delhi - 110017</br>
              P: +91 9999999999
            </address>
          </div>
          
          <div class="col-lg-8">
            <form action="lib/Mailstmp/index.php" method="post" class="form-horizontal">
              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="uname" id="user-name" placeholder="Enter you name">
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <label for="user-email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="email" id="user-email" placeholder="Enter you Email Address">
                </div>
              </div><!-- End form group -->

              

              <div class="form-group">
                <label for="user-message" class="col-lg-2 control-label">Any Message</label>
                <div class="col-lg-10">
                  <textarea name="user_message" id="user-message" class="form-control" 
                  cols="20" rows="10" placeholder="Enter your Message"></textarea>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>

             

            </form>
          </div>
        </div><!-- End the row -->

    </section>
  </div>

   <?php include'footer.php';?>

	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>	



<script>
// Get the modal
var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if else(event.target == modal2) {
        modal2.style.display = "none";
    } 
}
</script>
</html>