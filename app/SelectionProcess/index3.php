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

$paragraph = $_POST['paragraph'];

 setcookie("paragraph", $paragraph, time()+3600, "/", "",  0);

header("location: index4.php");



     }
            ?>
            
<!-- Main content -->
    <section class="content">
          <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
       
            <div class="col-md-10 col-md-offset-1">
               <h3>PARAGRAPH WRITING</h3>
               <p>WRITE 100 words ON </p>
                <ul>
                <li>WHY DO YOU WANT TO JOIN US </li>
                      OR
                <li>EXPLAINING WHY HOME BASED WORK IS AN IDEAL OPTION FOR YOU </li>
                </ul>
            <form role="form" method="POST" autocomplete="off" >
                <input type="hidden" name="user_id" value="256">
              <div class="box-body">
                  <div class="form-group">
                  
                  <textarea class="form-control" col="30" rows="8" name="paragraph"  id="paragraph" ></textarea>
                </div>
               
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer text-center">
                 
                   <a href="index2.php" class="btn btn-primary" >Previous</a>
                <input type="submit" name="submit" value="Next" id="submit" style="margin-left:36px;margin-left:36px;"  class="btn btn-primary" required>
                
                
                <br>
               
              </div>
            </form>
            </div>
            
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<?php include'footer.php';?>
</body>
  </html>