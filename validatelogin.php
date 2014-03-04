<?php
	
	// username and password sent from form 
	$myusername = $_GET['myusername']; 
	$mypassword = $_GET['mypassword'];
	session_start();

	if ($myusername != "" && $mypassword != "") {
		$_SESSION['myusername'] = $myusername;
		header("location:homepage.php");	
	} else {	
		$_SESSION['errormsg'] ="Please enter your email/password";
		header("location:login.php");
	}
	
?>