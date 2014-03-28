<?php
	
	// username and password sent from form 
	$myusername = $_GET['myusername']; 
	$mypassword = $_GET['mypassword'];
	session_start();

	if ($myusername != "" && $mypassword != "") {
		$_SESSION['myusername'] = $myusername;

		if(isset($_SESSION['url'])) {
			$url = $_SESSION['url']; // holds url for last page visited.
			
		}
   			
		else {
			$url = "homepage.php";
			
		}
		header("location:$url");
			
	} else {	
		$_SESSION['errormsg'] ="Please enter your email/password";
		header("location:login.php");
	}




	
?>