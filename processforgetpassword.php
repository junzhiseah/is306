<?php
 
	$myusername = $_GET['myusername']; 
	session_start();

	if ($myusername != "" ) {
		
		header("location:passwordretrieve.php");	
	} else {	
		$_SESSION['forgetpassworderrormsg'] = "Please enter your email";
		header("location:forgetpassword.php");
	}
	
?>