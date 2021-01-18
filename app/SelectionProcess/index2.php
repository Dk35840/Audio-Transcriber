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
        
        <?php  

       



     if(isset($_POST["submit"])) {

$time_devote = $_POST['time_devote'];
$type_speed = $_POST['type_speed'];
$work_exp = $_POST['work_exp'];



 setcookie("time_devote", $time_devote, time()+3600, "/", "",  0);
setcookie("type_speed", $type_speed, time()+3600, "/", "",  0);
setcookie("work_exp", $work_exp, time()+3600, "/", "",  0);
 
 
header("location: index3.php");



     }
            ?>
            
<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
        
            <div class="col-md-6 col-md-offset-3">
			
			
            <form role="form"  method="POST" autocomplete="off">
                <input type="hidden" name="user_id" value="256">
              <div class="box-body">
                  <div class="form-group">
                  <label>ARE YOU AN EXPERIENCED TRANSCRIBER? PLS SHARE YOUR WORK EXPERIENCE IN DETAILS</label>
                  <textarea class="form-control"  name="work_exp" id="work_exp"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">YOUR TYPING SPEED. </label>
                  <input type="text" class="form-control"  value="" name="type_speed" id="type_speed" required>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">HOW MUCH TIME IN HOURS YOU CAN DEVOTE TO WORK WITH US IN A DAY</label>
                   <input type="text" class="form-control"  value="" name="time_devote" id="time_devote" required>
                </div>
               
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer text-center ">
                
                 <a href="index.php" class="btn btn-primary" >Previous</a>
                 
                 <input type="submit" name="submit" value="Next" id="submit" style="margin-left:36px;margin-left:36px;" class="btn btn-primary">
                 
              <br>  
              </div>
            </form>
            </div>
            </div>
          </div>
         
       <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<?php include'footer.php';?>
</body>
  </html>