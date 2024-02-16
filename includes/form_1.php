<?php	
	if (empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$name = $_POST['name'];
	$name = $_POST['name'];
	$name = $_POST['name'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$message = $_POST['message'];
	$email = $_POST['email'];
	$email = $_POST['email'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nName: $name \nName: $name \nName: $name \nName: $name \nEmail: $email \nMessage: $message \nMessage: $message \nEmail: $email \nEmail: $email \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>