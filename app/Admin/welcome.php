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
		padding:100px;
	}
    </style>
	
    
	<body data-spy="scroll" data-target="#my-navbar">
	<div class="col-md-12">
	  <div class="col-md-6 col-md-offset-3">

 <?php include'header.php'?>
 
      <h1>Welcome <?php echo $_SESSION['login_user']; ?></h1> 
    
	  
	  <h3><a href="upload.php">Upload and view Audio</a><h3>
	  
	   <h3><a href="candidate.php">See Candidate</a><h3>
	    <h3><a href="company.php">See Company Members</a><h3>
	  
	  
	 </div>
	 </div>
   </body>
   <?php include'footer.php';?>
   
</html>