<?php

	if ($_POST) {

		$emailTo = "dougmrichman@gmail.com";
		
		$headers = $_POST["email"];		
		$subject = $_POST["subject"]; 
		$body = $_POST["message"];

		if (mail($emailTo, $subject, $message, $headers)) {
			
			   header('Location: index.html');
			   
               exit;
			

		}
		
		else {
			echo ("the email could not be sent");
		}

		
		
	}
	
	?>