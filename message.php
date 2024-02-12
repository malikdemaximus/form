<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$website = $_POST["website"];
	$message = $_POST["message"];

	if(!empty($email) && !empty($message)) {
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$receiver = "abdulmalik.ermekbai@gmail.com";
			$subject = "From: $name <$email>";
			$body = "Name: $name\nEmail: $email\Phone: $phone\Website: $website\nMessage: $message";
			$sender = "From: $email";
			if(mail($receiver, $subject, $body, $sender)) {
				echo "Your message sent";
			} else {
				echo "Sorry, failed to send your message";
			}
		} else {
			echo "Enter a valid Email address";
		}
	} else {
		echo "Email and password field is required";
	}
?>