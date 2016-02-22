<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: Quino Website';
	$to = 'qjenkins@vt.edu';
	$subject = 'New Coaching Message';

	$body = "From: $name\n Email: $email\n Message:\n $message";

	if ($_POST['submit']) {
	    if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
	    } 
	    else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    }
	}



	echo 'Sent';
?>
