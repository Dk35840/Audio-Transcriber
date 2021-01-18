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


	<?php   
     if(isset($_POST["submit"])) {



  $name= $_COOKIE["name"]; 
        $email=$_COOKIE["email"];


 $lname=$_COOKIE["lname"] ;
 $pwd=$_COOKIE["pwd"];
 $mobile=$_COOKIE["mobile"];
 
 $city=$_COOKIE["city"];
 $country=$_COOKIE["country"];
 $languages=$_COOKIE["languages"];
 $source_of_inf=$_COOKIE["source_of_inf"];

 $pincode=$_COOKIE["pincode"];
 
 $time_devote=$_COOKIE["time_devote"];
 $type_speed=$_COOKIE["type_speed"];
  $work_exp=$_COOKIE["work_exp"];
 
 $paragraph=$_COOKIE["paragraph"];

 $transcribers= $_COOKIE["transcribers"];


 
$query_run="INSERT INTO candidate (`user_id`, `c_fn`, `c_ln`, `c_email`, `c_password`, `c_mobile`, `c_city`, `c_country`, `c_pincode`, `c_language`, `c_howfind`, `c_exp`, `c_ts`, `paragraph`,`transcribers`) VALUES (NULL, '$name', '$lname', '$email', '$pwd', '$mobile', '$city', '$country',  $pincode, ' $languages', '$source_of_inf', '$work_exp', '$type_speed', '$paragraph','$transcribers')";

//$query_run="INSERT INTO candidate (`c_id`, `c_fn`, `c_ln`, `c_email`, `c_password`, `c_mobile`, `c_city`, `c_country`, `c_pincode`, `c_language`, `c_howfind`, `c_exp`, `c_ts`, `paragraph`) VALUES (NULL,  $name ,  $lname ,  $email ,  $pwd ,  $mobile ,  $city ,  $country , $pincode,   $languages ,  $source_of_inf ,  $work_exp ,  $type_speed ,  $paragraph)";

//$query_run="INSERT INTO candidate (  c_id  ,   c_fn  ,   c_ln  ,   c_email  ,   c_password  ,   c_mobile  ,   c_city  ,   c_country  ,   c_pincode  ,   c_language  ,   c_howfind  ,   c_exp  ,   c_ts  ,   paragraph  ,   ip  ,   valid  ) VALUES (NULL,  $name ,  $lname ,  $email ,  $pwd ,  $mobile ,  $city ,  $country , NUll,   $languages ,  $source_of_inf ,  $work_exp ,  $type_speed ,  $paragraph , NUll, NUll)";

$run=mysqli_query($con,$query_run);

if($run){

  echo "<script type='text/javascript'>  
      alert('Your transcribers is send with us please allow some time to review it');
     location='../lib/Mailstmp/send_about.php'  ;</script>";
 
    }
else{  echo "<script type='text/javascript'>  
      alert('Some invalidate data try again');
     location='index.php'  ;</script>";}
   
}


  
            ?>
            
	
        <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            
          
            <div class="col-md-10 col-md-offset-1">
              
               <h3>TRANSCRIBE</h3>
           
                
            <form role="form" method="POST" autocomplete="off">
           <p>  Thank you for submitting your answers.</p>


<p>When done click below to submit your application.</p>

<p>We will review your application and get back to you soon.</p>
<input type="hidden" name="user_id" value="256">

		
               
             
              
              <!-- /.box-body -->

              <div class="box-footer text-center">
                 <a href="index4.php" class="btn btn-primary" >Previous</a>
      <input type="submit" name="submit" value="SUBMIT" id="submit" style="margin-left:36px;margin-left:36px;" class="btn btn-primary">
                 <br>   <span><b> Please complete the form before Submit. After Clicking on Submit you will not be able to change data</b></span>
                 
              </div>
            </form>
            </div>
           
          </div>
          <!-- /.box -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
	
	<?php include'footer.php';?>
  </body>
  </html>