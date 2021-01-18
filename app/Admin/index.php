<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>\
  <link rel="stylesheet" href="style.css" media="all"/>
  <link rel="stylesheet" href="css/style.css" media="all"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
 
</head>

<body>

<!--- navigation bar-->
	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
      <div class="container">
        <div class="navbar-header">
          

          <a href="../index.php" class="navbar-brand">Transcribersnet</a>
        </div><!-- Navbar Header-->
        <div style="text-align: justify; text-align-last:right;" class="collapse navbar-collapse" id="navbar-collapse">
      
      
      
    
      
        </div>
      </div><!-- End Container-->
    </nav><!-- End navbar -->


    <!--- end of navigatin bar-->
	 <?php
	 session_start();
     include('config.php');
	
   
	if(isset($_POST['submit'])){
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT user_id FROM users WHERE user_email = '$myusername' and user_password = '$mypassword' and user_role='admin'";
      $result = mysqli_query($con,$sql);
    
	
      
    
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(mysqli_num_rows($result) ==1) {
      
		
         $_SESSION['login_user'] = $myusername;
         $_SESSION['user_role'] = 'admin';
         
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
  
  

</body>
</html>
