<?php
if(!empty($_POST['name']) &&  !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['msg'])) {

	$to = "getdsigned@yahoo.com";
	$subject = "Customer Email";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['msg'];
	
	$message = "
		<html>
		<head>
		<title>Contact</title>
		</head>
		<body>
		<table>
		<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Phone no</th>
		<th>Message</th>
		</tr>
		<tr>
		<td>".$name."</td>
		<td>".$email."</td>
		<td>".$phone."</td>
		<td>".$msg."</td>
		</tr>
		</table>
		</body>
		</html>";
	
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// More headers
	$headers .= 'From: <'.$email.'>' . "\r\n";
	
	// send email
 	$success = mail($to,$subject,$message,$headers);
 	
	// redirect to success page
	if ($success){
	   echo "success";
	}else{
	    echo "invalid";
	}
}
 
?>
