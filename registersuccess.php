<?php
	
	// username and password sent from form 
	$myusername = $_GET['myusername']; 
	$mypassword = $_GET['mypassword'];
	session_start();

	if ($myusername != "" && $mypassword != "") {
		$_SESSION['myusername'] = $myusername;
		$_SESSION['successmsg'] ="Registration sucessful!";
		header("location:login.php");	
	} else {	
		$_SESSION['errormsg'] ="Please enter your email/password";
		header("location:register.php");
	}
	
?>