<?php
   include('session.php');
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Transcribersnet App </title>
	<meta name="description" content="Wiredwiki App">
	<!-- Latest compiled and minified CSS -->
	 <!-- Latest compiled and minified CSS -->
   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css" media="all"/>
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

	<style>
	body{
		padding-top: 100px;
	}
 
    </style>
  
  
	
	<body data-spy="scroll" data-target="#my-navbar">

 <?php include'header.php';?>

<!-- Content Wrapper. Contains page content COPIED-->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

      
    <section class="content-header">
      <h1 align="center">
       Selection Process
        
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
           
           
            <div class="row">
             <div class="col-md-6 col-md-offset-3">
			

				 <h1>Welcome <?php 
				$name= $_SESSION['login_user']; 
				$email=$_SESSION['email'];
				echo $name;?>
				</h1> 
			

      <?php	 
     if(isset($_POST["submit"])) {

$lname = $_POST['lname'];
$pwd = $_POST['pwd'];
$mobile = $_POST['mobile'];
$pincode = $_POST['pincode'];
$city = $_POST['city'];
$country = $_POST['country'];
$languages = $_POST['languages'];
$source_of_inf = $_POST['source_of_inf'];


setcookie("name", $name, time()+3600, "/", "",  0);
setcookie("email", $email, time()+3600, "/", "",  0);
setcookie("lname", $lname, time()+3600, "/", "",  0);
setcookie("pwd", $pwd, time()+3600, "/", "",  0);
setcookie("mobile", $mobile, time()+3600, "/", "",  0);
setcookie("email", $email, time()+3600, "/", "",  0);
setcookie("city", $city, time()+3600, "/", "",  0);
setcookie("country", $country, time()+3600, "/", "",  0);
setcookie("languages", $languages, time()+3600, "/", "",  0);
setcookie("source_of_inf", $source_of_inf, time()+3600, "/", "",  0);
setcookie("pincode", $pincode, time()+3600, "/", "",  0);





 

 header("location: index2.php");


     }
            ?>
					  
			  <!-- form start -->
              <form role="form" method="POST" autocomplete="off" >
                <input type="hidden" name="user_id" value="">
                <div class="box-body">
				     
					<div class="form-group">
                     <label>First Name<span style="color:red">*</span></label>
                     <input type="text" class="form-control" id="fname" name="fname" value=<?php echo $name?> placeholder="First Name" required>
					</div>
					
                    <div class="form-group">
                     <label >Last Name<span style="color:red">*</span></label>
                     <input type="text" class="form-control" id="lname" name="lname" value="" placeholder="Last Name" required>
                    </div>
                
                    <div class="form-group">
                    <label >Email<span style="color:red">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email?>" placeholder="Email" required>
                     <p id="error" style="display:none;color:red;">  Please enter a valid Email <input type = "hidden" id="email_ers" value="0"></p>
                   </div>
				   
                   <div class="form-group">
                  <label >Password<span style="color:red">*</span></label>
                  <input type="password" class="form-control" id="pwd" name="pwd" value="" placeholder="Password" required>
                   </div>
                
                               
		         <div class="form-group">
                  <label>Mobile<span style="color:red">*</span> </label>
                  <input type="phone" class="form-control" id="mobile" pattern=".{10,10}"  title="Please enter 10 digits only"   minlength='10' maxlength="10" name="mobile" value="" placeholder="Mobile" required>
                </div>
				
               
				
                <div class="form-group">
                  <label>City </label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="City" value="">
                </div>
				
                <div class="form-group">
                  <label>Country </label>
                  <input type="text" class="form-control" id="country" name="country"  value="" placeholder="Country">
                </div>
				
                <div class="form-group">
                  <label>Pin Code </label>
                  <input type="text" class="form-control" id="pincode" name="pincode"  value="" placeholder="Pin Code">
                </div>
				
                 <div class="form-group">
                  <label>Languages known </label>
                  <input type="text" class="form-control" id="languages" name="languages" placeholder="Languages known" value="">
                   
                </div>
				
				
                 <div class="form-group">
                  <label>HOW DID YOU FIND US </label>
                   <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="source_of_inf"  value="INTERNET" >
                      INTERNET
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="source_of_inf"   value="WORD OF MOUTH">
                      WORD OF MOUTH
                    </label> 
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="source_of_inf"   value="JOB POSTING" >
                     JOB POSTING
                    </label>
                  </div>
                   <div class="radio">
                    <label>
                      <input type="radio" name="source_of_inf"   value="REFERENCE" >
                     REFERENCE
                    </label>
                  </div>
                   <div class="radio">
                    <label>
                      <input type="radio" name="source_of_inf" id="other"  value="other" >
                     OTHER <input type="text"  id="inputother" name="inputother" value=""  onchange="changeradioother()" >
                    </label>
                  </div>
                 
                </div>
 
                 
                
              </div>
			  </div>
              <!-- /.box-body CLASS-FORM-GROUP -->

              <div class="box-footer text-center">
                <input type="submit" name="submit" id="submit" value="Next" class="btn btn-primary" >
                         <br>   

              </div>
            </form>
           
		   
		   
		   
            
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
      </div> <!-- /CONTENT WRAPPER -->

  <?php include'footer.php';?>
  </body>
  </html>