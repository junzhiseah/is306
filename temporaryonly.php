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
	<table border = "1">
				<tr>
					<td> 
						Name: testing <br/>
						Email: testing@gmail.com <br/>
						Likes: 160 <img src="img/like.PNG" height = "15px" width = "15px"> <img src="img/call.PNG" height = "15px" width = "15px"> <br/>
					<td/>
					<td>
						<img src="img/LionKing.jpg" height = "100px" width = "100px">
					</td>
			 	
			 	</tr>
			 	

	 </table>
	 
	Deals <br><br>

	Comments <br>
	</table>
	<?php
		session_start();
		if(isset($_SESSION['comments'])){

			echo $_SESSION['comments'];
			//echo $_SESSION['myusername'];
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