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
	 <link rel="stylesheet" href="css/style.css" media="all"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

	<style>
	body{
		padding-top:100px;
	}
    </style>
	
    
	<body data-spy="scroll" data-target="#my-navbar"> 
	<div class="col-md-12">
	  <div class="col-md-6 col-md-offset-3">
	

 <?php include'header.php'?>
 
<?php






// to submit the audio transcribed
     if(isset($_POST['submit'])) {

     $c_id = $_POST['c_id'];

    
     
     $transcriberd_text=$_POST['transcribers'];

     

  $query_run="UPDATE audio SET transcriberd_text = '$transcriberd_text' WHERE a_id = '$c_id' ";


$run=mysqli_query($con,$query_run);


     }
          




         // to display the audio files

		$getaudio="SELECT * from audio";
		$runaudio=mysqli_query($con,$getaudio);
		?>
		<h4>Dashboard<h4><br>

			<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                      
                      	<th>Audio File</th>
                        <th>Name</th>
                     
                   
                    
                  
                           <th>Deadline</th>

                   
        
                    </tr>
                </thead>
                
                      <tbody>
		<?php
		while($row_product=mysqli_fetch_array($runaudio)){
			$audio_title=$row_product['file_name'];
			$c_id=$row_product['a_id'];
			$Deadline=$row_product['deadline'];
		?> 
		
		<tr><td><?php echo $c_id;?></td>
			<td><span><audio controls="controls">
    <source src='../audio/<?php echo $audio_title;?>' type="audio/mpeg">
 
    Your browser does not support the HTML5 Audio element.
      </audio></span></td>
      <td><?php echo $audio_title;?></td>
    
      <td><?php echo $Deadline;?></td>
  </tr>


<!--- 4/4 added code-->

<form method="POST">
    <tr> <td colspan="4"> 
    <textarea class="form-control" col="30" rows="8" name="transcribers" id="transcribers"></textarea>
              <!-- /.box-body -->

              <div class="box-footer text-center">
                 </div>
              </td></tr>    

       <tr><td style="display:none";></td><td style="display:none";><input type="text" name="c_id" value=<?php echo $c_id ;?>  /></td></tr>
         
              <tr><td colspan="4"><input class="btn btn-primary" type="submit" name="submit" /></td></tr>
	  </form>
<!--- 4/4 added code-->


		<?php } ?>

		 </tbody>
            </table>



</div>
</div>
</body>



<?php include'footer.php';?>
</html>