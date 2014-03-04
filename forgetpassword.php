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
	<form name="form1" method="post" action="passwordretrieve.php">

		<strong><h1>Forgot Password</h1></strong><br>

		<h3>Enter your email for password to be send to you</h3>

		Email 
		<input name="myusername" type="text" id="myusername"><br>

		<center><input type="submit" name="enter" value="Enter"></center>
	</form>

	<form method="get" action="login.php">
			<input type="submit" name="back" value="Back to Main Page" />
	</form>
</div>