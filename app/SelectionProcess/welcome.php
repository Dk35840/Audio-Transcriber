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


if(isset($_POST["submit"])) {
// for audio files   
$audio_file=$_FILES['fileToUpload']['name'];
$audio_temp=$_FILES['fileToUpload']['tmp_name'];


// for date 
$rawdate = $_POST['date'];
$date = date('Y-m-d', strtotime($rawdate));


// move uploaded file
move_uploaded_file($audio_temp,"audio/$audio_file");

$get_candidate="INSERT INTO `admin` (`username`, `password`, `id`) VALUES ('admin5', 'admin4', NULL)";
		$run_candidate=mysqli_query($con,$get_candidate);

$query_run="INSERT INTO `audio` (`a_id`, `file_name`, `detail`) VALUES (NULL,'$audio_file',NULL)";
$run=mysqli_query($con,$query_run);



if($run){
	echo"audio added succesfully";
	header("Location:upload.php");
	
}
}



		$getaudio="SELECT * from audio";
		$runaudio=mysqli_query($con,$getaudio);
		?>
		<h4>The uploaded audio files are:-<h4><br>

			<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                      
                        <th>Name</th>
                     
                        <th>Delete</th>
                    
                  
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
		
		<tr><td><span><audio controls="controls">
    <source src='audio/<?php echo $audio_title;?>' type="audio/mpeg">
 
    Your browser does not support the HTML5 Audio element.
      </audio></span></td>
      <td><?php echo $audio_title;?></td>
     <?php  echo "<td><a href='upload.php?delete={$c_id}'>Delete</a></td>"; ?>
      <td><?php echo $Deadline;?></td>
  </tr>
	  
     
		<?php } ?>

		 </tbody>
            </table>


<form  method="post" enctype="multipart/form-data">
    Select audio to upload:
   <h5> <input type="file" name="fileToUpload" id="fileToUpload"></h5>
   <h5> <label for="date">Audio Deadline</label></h5>
    <h5><input type="date" size="60" name="date" id="date"/></h5>
    <h5><input type="submit" value="Upload Audio" name="submit"></h5>
</form>
</div>
</div>
</body>


<?php
// delete function
	if(isset($_GET['delete'])){

   

        $the_user_id = $_GET['delete'];

        $query = "DELETE FROM audio WHERE a_id = '$the_user_id' ";
        $delete_user_query = mysqli_query($con, $query);

        if( $delete_user_query){
	echo"audio deleted succesfully";
	header("Location:upload.php");
      

            }  } 




?>
<?php include'footer.php';?>
</html>