<?php
	
	$comments = $_GET['comments'];
	session_start();

	if ($comments != "") {
		
		$_SESSION['comments'] = $comments;
		header("location:accountinfo.php");
	} else {
		$_SESSION['errormsg'] = "No comment was entered";
		header("location:accountinfo.php");
	}

?>