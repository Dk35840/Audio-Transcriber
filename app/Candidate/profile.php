<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="css/style.css" media="all"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>
<style>
	body{
		padding:50px;
	}
    </style>
<body>

	<?php include'header.php' ?>

	<?php 


    
	include('session.php');


			$user_id=$_SESSION['user_id'];

	$getdata="SELECT bankdetails.* , candidate.* ,users.* FROM ((bankdetails INNER JOIN candidate ON bankdetails.id=candidate.user_id) INNER JOIN users ON bankdetails.id=users.user_id) WHERE candidate.user_id = $user_id" ;
	

	// for checking the sqli query
	$rundata=mysqli_query($con,$getdata);
   if (!$rundata) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
    }




		while($row_product=mysqli_fetch_array($rundata)){

			$id=$row_product['id'];
			$bankname=$row_product['bankname'];
			$branchaddress=$row_product['branchaddress'];
			
			$hname=$row_product['hname'];
			$accountnumber=$row_product['accountnumber'];
				$ifscode=$row_product['ifscode'];
		
		

			$c_fn=$row_product['c_fn'];
			$c_ln=$row_product['c_ln'];
			$c_email=$row_product['c_email'];
			$c_mobile=$row_product['c_mobile'];
			$c_city=$row_product['c_city'];
			$c_country=$row_product['c_country'];
			$pincode=$row_product['c_pincode'];
			$type_speed=$row_product['c_ts'];
			$paragraph=$row_product['paragraph'];
		
     

		}
?>

	 <h1>Welcome <?php echo $_SESSION['login_user']; ?></h1> 
	<div>
		<h2>ACCOUNT INFORMATION</h2>
		
	</div>

<div>
<table class="table table-bordered table-hover">
	<form name="postForm" action="form_process.php" method="POST" >

	<tr><td >First Name</td><td colspan="2"><input type="text" name="firstname" value=<?php echo $c_fn; ?> /></td></tr>
	<tr><td>Last Name</td><td colspan="2"><input type="text" name="lastname" value=<?php echo $c_ln; ?> /></td></tr>
	<tr><td>Email</td ><td colspan="2"><input type="text" name="email" value=<?php echo $c_email; ?> /></td></tr>
	<tr><td>City</td><td colspan="2"><input type="text" name="city" value=<?php echo $c_city; ?> /></td></tr>
	<tr><td>Pincode</td><td colspan="2"><input type="text" name="pincode" value=<?php echo $pincode; ?> /></td></tr>
	<tr><td>Mobile No.</td><td colspan="2"><input type="text" name="phone" value=<?php echo $c_mobile; ?>/></td></tr>
	<tr><td>Country</td><td colspan="2"><input type="text" name="country" value=<?php echo $c_country; ?> /></td></tr>
	<tr><td>Typing Speed</td ><td colspan="2"><input type="text" name="type_speed" value=<?php echo $type_speed; ?> /></td></tr>


<!--- bank details-->
	<tr><td>Bank Name</td><td colspan="2"><input type="text" name="bankname" value=<?php echo $bankname; ?> /></td></tr>
	<tr><td>Branch Address</td><td colspan="2"><input type="text" name="branchaddress" value=<?php echo $branchaddress; ?>/></td></tr>
	<tr><td>Holder Name</td ><td colspan="2"><input type="text" name="hname" value=<?php echo $hname; ?> /></td></tr>
	<tr><td>Account Number</td><td colspan="2"><input type="text" name="accountnumber" value=<?php echo $accountnumber; ?> /></td></tr>
	<tr><td>IFSC code</td ><td colspan="2"><input type="text" name="ifscode" value=<?php echo $ifscode; ?> /></td></tr>


	
	
	<tr><td></td><td><input class="btn btn-primary" type="Submit" value="Edit" Name="Edit" />
	</td></tr>
	</form>
</table>
</div>
</body>
</html>