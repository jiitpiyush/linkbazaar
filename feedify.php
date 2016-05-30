<?php 
					$to = strip_tags($_POST['to']);

					$subject = $_POST['sub'];

					$headers = "From: " . "support@feedify.co.in" . "\r\n";
					$headers .= "MIME-Version: 1.0\r\n";
					$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

					$message = $_POST['msg'];
					mail($to, $subject, $message,$headers);
?>