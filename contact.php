<?php
	if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$subject = $_POST['subject']
	$msg = $_POST['msg'];

	$to = "phuc_truong123@yahoo.com";


	$message="Name: ".$name."\n"."Email: ".$mailFrom."\n"."Subject: ".$subject."\n"."Message: "."\n\n".$message;

	if(mail($to, $subject, $message)){
			echo "<p>Message Sent! Thank you for your time!</p>";
		}
	}
?>