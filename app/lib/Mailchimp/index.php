<!DOCTYPE html>
<html>
<head>

<title>Payment Processing</title>
	
</head>
<body >

<?php
//this is to add list to the subscriber
$email = $_POST['email'];;
$list_id = 'b95e9ed49e';
$api_key = '616099124e6456f24400c33c3555157c-us14';
 
$data_center = substr($api_key,strpos($api_key,'-')+1);
 
$url = 'https://'. $data_center .'.api.mailchimp.com/3.0/lists/'. $list_id .'/members';
 
$json = json_encode([
    'email_address' => $email,
    'status'        => 'pending', //pass 'subscribed' or 'pending'
]);
 
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
$result = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);


if($status_code==200){
	echo "<script type='text/javascript'>  
	    alert('Added to suscriber list, check mail for confirmation');
	   location='../../index.php'  ;</script>";
        
}
else echo "<script type='text/javascript'>  
	    alert('Already suscribed or Slow internet');
	   location='../../index.php'  ;</script>";
?>
</body>