<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
 
  <link rel="stylesheet" href="css/style.css" media="all"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
 
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
      <div class="container">
        <div class="navbar-header">
          

          <a href="../index.php" class="navbar-brand">Transcribersnet</a>
        </div><!-- Navbar Header-->
        <div style="text-align: justify; text-align-last:right;" class="collapse navbar-collapse" id="navbar-collapse">
      
      
      
    
      
        </div>
      </div><!-- End Container-->
    </nav><!-- End navbar -->
	 <?php
	 session_start();
     include('config.php');



	if($_SESSION['user_role'] == 'company') {
              header("location:welcome.php");
            }
   


    if(isset($_POST['signup'])){


        $firstname= $_POST['firstname'];
      $lastname= $_POST['lastname']; 
          $myemail = $_POST['email'];
      $mypassword = $_POST['passwd']; 
       $username = $_POST['username']; 
        
     

    $sql="INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_role`) VALUES (NULL, ' $username', ' $mypassword', ' $firstname', ' $lastname', ' $myemail', 'company')";

         $result = mysqli_query($con,$sql);
         // for error checkin added the following line
         //  $result = mysqli_query($con,$sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(db_conx), E_USER_ERROR);

     if($result) {
      echo "<script type='text/javascript'>  
      alert('Sign up succesfully');
     location='../index.php' ;</script>";
    
       
      }else {
         echo "<script type='text/javascript'>  
      alert('Email is already added');
     location='../index.php' ;</script>";
      }

    }

	if(isset($_POST['submit'])){
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      

      $sql = "SELECT user_id FROM users WHERE user_email = '$myusername' and user_password = '$mypassword' and user_role='company'";
      
      $result = mysqli_query($con,$sql);
    
	
      
    
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(mysqli_num_rows($result) ==1) {
      
		
         $_SESSION['login_user'] = $myusername;
           $_SESSION['user_role'] = 'company';
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   
   ?>
			
  <div class="login">
	<h1>Login</h1>
    <form method="post">
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" value = "submit" name="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>
  
  
<!--- added-->

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Log in Company</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    

                                
                           


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                   
                                    <button type="submit" value = "submit" name="submit" id="btn-login" class="btn btn-success btn-block ">Login</button>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>



        <!-- sign up part-->
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >



                            <form id="signupform" class="form-horizontal" role="form" method="post">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">username</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="signup" value = "signup" name="signup" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                       
                                    </div>
                                </div>
                                
                               
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
    </div>
    <!--- added-->

</body>
</html>
