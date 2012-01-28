<?php

/* get variables from request (fold)*/
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
/* get variables from request (end)*/

if($email && $message) {
	/*Send email (fold) */
	$body = "Sombody submitted:\r\nName: $name\r\nEmail: $email\r\nPhone: $phone\r\nMessage: $message\r\n";
	/*add more to the email body e.g.: $body .= "$address\r\n"; */
	mail("support@js-ing.com", "Email from see the sign contact form", $body, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");
	/*Send email (end) */
	
	/*return messgae to the user (fold)*/
	echo("<h2>You will here from us soon.</h2>");
	echo("<p>This was submitted:</p>");
	echo("<p>Email: $email </p>");
	echo("<p>Message: $message </p>");
	/*return messgae to the user (end)*/
} else
	//show error message if name, email or message is missing
	echo "Something went wrong. Please try again.";
?>