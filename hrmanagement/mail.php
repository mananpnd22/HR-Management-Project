<?php
	require("phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->From = "mananpnd22@gmail.com";
	$mail->FromName  =  "Manan";
	$mail->AddAddress("dhyanpandya@yahoo.in");
	//$mail->AddAddress("recipient_2@domain.com");
 
	$mail->SMTPAuth = "true";
	$mail->Username = "mananpnd22@gmail.com";
	$mail->Password =  "manan$2204";
	$mail->Port  =  "465";
 
	$mail->Subject = "Feedback form results";
	$mail->Body = "HEllo This is a test";
	$mail->WordWrap = 50;
 
	if(!$mail->Send())
	{
		echo 'Message was not sent.';
		echo 'Mailer error: ' . $mail->ErrorInfo;
	}
	else
	{
		echo 'Thank you for your feedback.';
	}
 
	//$email = $_REQUEST['email'] ;
	//$message = $_REQUEST['message'] ;
?>