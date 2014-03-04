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

<div class="maincontainer">
	<form name="form1" method="GET" action="registersuccess.php">

		<strong><h1>Register an account</h1></strong><br>
		
		Email 
		<input name="myusername" type="text" id="myusername"><br>

		Password 
		<input name="mypassword" type="text" id="mypassword"><br>

		<center><input type="submit" name="register" value="Register"></center>
	</form>

	<form method="get" action="login.php">
			<input type="submit" name="back" value="Back to Main Page" />
	</form>
	<?php
		session_start();
		if(isset($_SESSION['errormsg'])) {
			
			echo $_SESSION['errormsg'];
			unset($_SESSION['errormsg']);
		}
	?>
</div>