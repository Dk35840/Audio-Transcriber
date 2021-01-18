<?php
   include('session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Transcribersnet App </title>
	<meta name="description" content="Wiredwiki App">
   
  <link rel="stylesheet" href="css/style.css" media="all"/>
	<!-- Latest compiled and minified CSS -->
	 <!-- Latest compiled and minified CSS -->
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

		 <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                      
                        <th>Company Name</th>
                     
                        <th>Email</th>
                    
                  
                      
                            <th>Delete</th>
                   
        
                    </tr>
                </thead>
                
                      <tbody>

 <?php include'header.php'?>
  <?php
	  
		$get_candidate="select * from users where user_role='company'";
		$run_candidate=mysqli_query($con,$get_candidate);
		
		while($row_candidate=mysqli_fetch_array($run_candidate))
		{
			$c_id=$row_candidate['user_id'];
			$c_fn=$row_candidate['user_firstname'];
		
			$c_email=$row_candidate['user_email'];
			echo "<td>$c_id </td>";
			echo "<td>$c_fn </td>";
			
			echo "<td>$c_email </td>";

			
        
      
        echo "<td><a href='company.php?delete={$c_id}'>Delete</a></td>";
        echo "</tr>";
		}
		?>


            </tbody>
            </table>

            <?<?php 

            				if(isset($_GET['delete'])){

   

        $the_user_id = $_GET['delete'];

        $query = "DELETE FROM users WHERE user_id = $the_user_id";
        $delete_user_query = mysqli_query($con, $query);
        header("Location: company.php");

            }   



             ?>
   </body>
   <?php include'footer.php';?>
   
</html>