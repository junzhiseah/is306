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
	 
	<strong><h1>Deals</h1></strong>
	<?php
		$images = array(
			0 => 'LionKing.jpg',
			1 => 'BreadTalk.jpg',
			2 => 'Food.jpg',
		);
		$image = $images[ rand(0,(count($images)-1)) ];
		$output = "<img src=\"img/".$images[1]."\" alt=\"\" border=\"0\" />";
    	print ($output); 
		
	?>

	<strong><h1>Comments</h1></strong> <br>
	</table>
	<?php
		$comments = array("i love it","It's awesome!");
		$clength=count($comments);
		for($x=0;$x<$clength;$x++){
		   echo $comments[$x];
		   echo "<br>";
		}
	?>
	<br>
	<form method="get" action="processcomment.php">
		<input type="text" name="comment" id="comment"><br>
		
		<br>
		<input type="submit" name="addcomment" value="Add Comment" />

	</form>
</div>