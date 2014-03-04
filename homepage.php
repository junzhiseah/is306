<style type="text/css">
	body{
	background-image: url('img/S4.png');
	/*background-size: 100%;*/

	background-repeat: no-repeat;
	
}

div.maincontainer{
	border:0px solid black;
	margin-left: 30%;
	margin-right: 46.9%;
	margin-top: 6%;
	height:77%;
	background-color: white;
	overflow:auto;

}
</style>

<?php
	session_start();
	if(!isset($_SESSION['myusername'])){
		header("location:login.php");
	}else{	
		$name = $_SESSION['myusername'];	
	}
?>

<div class="maincontainer">
	
	Welcome
	<?php
		echo $name
	?>

	<form method="get" action="login.php">
			<input type="submit" name="logout" value="Logout" />
	</form>
</div>