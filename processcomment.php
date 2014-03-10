<?php
	
	$comment = $_GET['comment'];
	$comments = $_GET['comments'];

	if ($comment != "") {
		array_push($comments, $comment);

		header("location:merchantinfolionking.php");
	} else {
		$_SESSION['errormsg'] = "No comment was entered";
		header("location:merchantinfolionking.php");
	}

?>