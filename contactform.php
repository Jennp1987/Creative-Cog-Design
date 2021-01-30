<?php
// $name = "Jenn Phillips";
// echo $name;
//check if you submitted contact form
if(isset($_POST['submit'])) {

//get user data
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];
	
//TEST
echo $name;
	
//creating missing info
//my email - does not work with gmail
$mailTo = "jenniferp1987@yahoo.com";
//who the email is from or CC.
$headers = "From: " . $mailFrom;
//customized message we'll receive in addition to the user message
$txt = "You have received an email from " . $name. ". \n\n".$message;

//three param : our email, subject of mail, message of mail
mail($mailTo, $subject, $txt, $headers );
//gives confirmation that it was sent and the contact script was loaded
header("Location: contact.php?mailsend");

}

?>