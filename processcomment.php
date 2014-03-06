<?php
	
	$comment = $_GET['comment'];
	$comments = $_GET['comments'];

	if ($comment != "") {
		array_push($comments, $comment);

		header("location:accountinfo.php");
	} else {
		$_SESSION['errormsg'] = "No comment was entered";
		header("location:accountinfo.php");
	}

?>