<?php
if(isset($_POST['send'])){
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = 'Subject';
	
$to = "dmicano.co@dmicano.com";
$from = $email;

$body = "From: $fname $lname\n Phone: $phone\n  E-Mail: $email\n Message:\n $message";
	
//checking error
if (!$_POST['first_name']) {
	$errfName = 'Please enter your first name';
}
 if (!$_POST['last_name']) {
	$errlName = 'Please enter your last name';
}
	
// Check if email has been entered and is valid
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$errEmail = 'Please enter a valid email address';
}
 
//Check if message has been entered
if (!$_POST['message']) {
	$errMessage = 'Please enter your message';
}
//Check if simple anti-bot test is correct
/*if ($human !== 5) {
	$errHuman = 'Your anti-spam is incorrect';
}*/
if (!$errfName && !$errlName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<h3 style="color: white">Thank You! We will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}	
}
}
?>