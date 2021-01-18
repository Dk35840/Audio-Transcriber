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
	<div>
		<h2>Payment form</h2>
		<h3>Fill the form and submit it for starting the transaction...</h3>
		<h3>Kindly note down the  transaction id...</h3>
	</div>

<div>
<table class="table table-bordered table-hover">
	<form name="postForm" action="form_process.php" method="POST" >
	<tr><td >txnid</td><td colspan="2"><input type="text" name="txnid" value="<?php echo $txnid=time().rand(1000,99999); ?>" /></td></tr>
	<tr><td>amount</td><td colspan="2"><input type="text" name="amount" value="" /></td></tr>
	<tr><td>firstname</td ><td colspan="2"><input type="text" name="firstname" value="" /></td></tr>
	<tr><td>email</td><td colspan="2"><input type="text" name="email" value="" /></td></tr>
	<tr><td>phone</td><td colspan="2"><input type="text" name="phone" value="" /></td></tr>
	<tr><td>productinfo</td ><td colspan="2"><input type="text" name="productinfo" value="" /></td></tr>

	<tr><td style="display:none";>success url</td><td style="display:none";><input type="text" name="surl" value="http://localhost/dashboard/projec/lib/payumoney/success.php" size="64" /></td></tr>
	<tr><td style="display:none";>failure url</td><td style="display:none";><input type="text" name="furl" value="http://localhost/dashboard/projec/lib/payumoney/fail.php" size="64" /></td></tr>

	<tr><td></td><td><input class="btn btn-primary" type="submit" />
	</td><td><input class="btn btn-primary" type="reset" /></td></tr>
	</form>
</table>
</div>
</body>
</html>