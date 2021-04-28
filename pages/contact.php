<?php
	if(isset($_POST['btn-send']))
	{
		echo 'Working';

		$userName = $_POST["name"];
		$email = $_POST["mail"];
		$subject = $_POST["subject"];
		$msg = $_POST["message"];

		if(empty($userName) || empty($email) || empty($subject) || empty($msg)){
			header('location:contactMe.php?error');
		}
		else{
			$to = "jenniferp1987@yahoo.com";

			if(main($to, $subject, $msg, $email)){
				header("location:contactMe.php?success");
			}
		}

	} else{

		header("location:contactMe.php");




	}


?>