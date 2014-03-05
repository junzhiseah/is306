<style type="text/css">
	body{
	background-image: url('img/S4.png');
	/*background-size: 100%;*/

	background-repeat: no-repeat;
	
}


</style>

<div class="maincontainer">
	<body>
	<form name="form1" method="GET" action="validatelogin.php">

		<strong><h1>Login</h1></strong><br>
		
		Email 
		<input name="myusername" type="text" id="myusername"><br>

		Password 
		<input name="mypassword" type="text" id="mypassword"><br>

		<center><input type="submit" name="login" value="Login"></center>
	</form>

	<form method="get" action="forgetpassword.php">
			<input type="submit" name="forgetpassword" value="Forget Password?" />
	</form>
		
	<form method="get" action="register.php">
			<input type="submit" name="register" value="Register" />
	</form>
	<?php
		session_start();
		if(isset($_SESSION['errormsg'])){

			echo $_SESSION['errormsg'];
			unset($_SESSION['errormsg']);
		}

		if(isset($_SESSION['successmsg'])){
			
			echo $_SESSION['successmsg'];
			unset($_SESSION['successmsg']);
		}
	?>
	</body>
</div>