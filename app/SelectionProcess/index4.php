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

$transcribers = $_POST['transcribers'];

 setcookie("transcribers", $transcribers, time()+3600, "/", "",  0);
 

header("location: index5.php");


     }
            ?>
            
        
        <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
         
            <div class="row">
            <div class="col-md-10 col-md-offset-1">
              
               <h3>TRANSCRIBE</h3>
              <p>PLEASE GO THROUGH THE <a href="http://donateitems.in/transnscriber/wp-content/uploads/2017/11/Guidlines-for-transcribing.pdf" target="_blank"><b>GUIDELINES</b></a><p>
               <p>Based on your language competancy, please do transcription for any one of the Audio files below:</p>
                <label>PLEASE SELECT THE LANGUAGE:</label>
           <form role="form" method="POST" autocomplete="off">
               <input type="hidden" name="user_id" value="256">
              <div class="box-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                  
               <p> LANGUAGE HINDI</p>
               <span>
               <audio controls="controls">
    <source src="media/hindi.mp3" type="audio/mpeg">
   
    Your browser does not support the HTML5 Audio element.
</audio>
              </span>
                </div>
               </div>
                 <div class="row">
                  <div class="form-group col-md-6">
                  

               <p> LANGUAGE ENGLISH</p>
               <span>
               <audio controls="controls">
    <source src="media/english.mp3" type="audio/mpeg">
 
    Your browser does not support the HTML5 Audio element.
</audio>
              </span>
                </div>
               </div>
                 <div class="row">
                  <div class="form-group col-md-6">
                  
               <p> LANGUAGE FRENCH</p>
               <span>
               <audio controls="controls">
    <source src="media/french.mp3" type="audio/mpeg">
  
    Your browser does not support the HTML5 Audio element.
</audio>
              </span>
                </div>
               </div>
              </div>
               <textarea class="form-control" col="30" rows="8" name="transcribers" id="transcribers"></textarea>
              <!-- /.box-body -->

              <div class="box-footer text-center">
                  <a href="index3.php" class="btn btn-primary" >Previous</a>
             <input type="submit" name="submit" value="Next" id="submit" style="margin-left:36px;margin-left:36px;" class="btn btn-primary"><br>
                
              </div>
            </form>
            </div>
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
  </div>
  <?php include'footer.php';?>
</body>
  </html>