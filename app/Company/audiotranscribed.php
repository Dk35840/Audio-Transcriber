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





		$getaudio="SELECT * from audio";
		$runaudio=mysqli_query($con,$getaudio);
		?>
		<h2>The transcription are :-</h2><br>

			<table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                      <th>Audio file</th>
                        <th>Name</th>
                     
                      
                           <th>Transcrpted </th>
                       <th>Audio  </th>
                            <th>Download </th>
                   
        
                    </tr>
                </thead>
                
                      <tbody>
		<?php
		while($row_product=mysqli_fetch_array($runaudio)){
			$audio_title=$row_product['file_name'];
			$c_id=$row_product['a_id'];
			$Deadline=$row_product['deadline'];
			$transcriberd_text=$row_product['transcriberd_text'];
		?> 
		
		<tr>  <td><?php echo $c_id;?></td><td><span><audio controls="controls">
    <source src='../audio/<?php echo $audio_title;?>' type="audio/mpeg">
 
    Your browser does not support the HTML5 Audio element.
      </audio></span></td>
      <td><?php echo $audio_title;?></td>
  
   
       
     	   <form method="post" action="export.php">
        <td colspan="2">
     	   <div class="form-group">
   			 
    			<textarea name="description" class="form-control" rows="4"><?php echo $transcriberd_text;?> </textarea>
			</div>
		</td>


		<td  class="nav-item">
				 <input type="hidden" name="c_id"  value=<?php echo $c_id;?>  /> 
				  <input type="hidden" name="deadline"  value=<?php echo $Deadline;?>  />
				   <input type="hidden" name="name"  value=<?php echo $audio_title;?>  />        

			 <input type="submit" name="create_word" class="btn btn-info" value="Download"  />   

			
		</td>


	</form>
		</td>
       
  </tr>
	  
     
		<?php } ?>

		 </tbody>
            </table>



</div>
</div>
</body>



<?php include'footer.php';?>
</html>