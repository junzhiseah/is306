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
	<strong><h1>Account Information</h1></strong>
	Name: <br>
	Email: <br>
	Likes: <br><br>

	Deals <br><br>

	Comments <br>

	<?php
		session_start();
		if(isset($_SESSION['comments'])){

			echo $_SESSION['comments'];
			echo $_SESSION['myusername'];
			unset($_SESSION['comments']);
		}
	?>
	<br>
	<form method="get" action="processcomment.php">
		<input type="text" name="comments" id="comments"><br>
		<?php
			if(isset($_SESSION['errormsg'])){

				echo $_SESSION['errormsg'];
				unset($_SESSION['errormsg']);
			}
		?>
		<br>
		<input type="submit" name="addcomment" value="Add Comment" />
	</form>
</div>