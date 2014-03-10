<style type="text/css">
	img.dealicon{
		width:280px;
		height:280px;
	}
</style>

	<strong><h1>Account Information</h1></strong>
	<table border = "1">
				<tr>
					<td>
						
						Name: crystaljade <br/>
						Email: crystaljade@gmail.com <br/>
						Likes: 134 <img src="img/like.PNG" height = "15px" width = "15px"> <img src="img/call.PNG" height = "15px" width = "15px"> <br/>
					<td/>
					<td>
						<img src="img/CrystalJade.jpg" height = "100px" width = "100px">
					</td>
			 	
			 	</tr>
			 	

	 </table>
	 
	<strong><h1>Deals</h1></strong>
	<?php
		$images = array(
			0 => 'CrystalJade.jpg',
			1 => 'BreadTalk.jpg',
			2 => 'Food.jpg',
		);
		$image = $images[ rand(0,(count($images)-1)) ];
		$output = "<img class='dealicon' src=\"img/".$images[0]."\" alt=\"\" border=\"0\" />";
		?>
		<table border = "1">
			<tr>
    			<td>
    				<?php 
    				print ($output); ?>
    			</td>
    		</tr>
    		<tr>
    			<td>
	    			Price: <strike>$1.80</strike><font color = "red"> $1.20 </font> / Tix <br/>
					Expiry: 27 Mar 2014<br/>
				</td>
			</tr>
		</table>
		


	<strong><h1>Comments</h1></strong> 
	</table>
	<?php
		$time = array("26-03-2014 09:05:20", "27-03-2014 11:05:39");  
		$comments = array("The buns are heavenly! ","My all time favourite!");

		if (isset($_GET['comment'])) {
			$input = $_GET['comment'];
			//echo $input;
			$dateTime = new DateTime();
			$strDateTime = $dateTime->format('d-m-Y H:i:s');
			array_push($comments, $input);
			array_push($time, $strDateTime);
		}
		
		$clength=count($comments);
		for($x=0;$x<$clength;$x++){
		   echo $comments[$x];
		   echo "<br>";
		   echo $time[$x];
		   echo "<br>";
		   echo "<br>";

		}
	?>
	
	New Comment
	<form method="get" action="merchantinfocrystaljade.php">
		<input type="text" name="comment" id="comment"><br>
		
		<br>
		<input type="submit" name="addcomment" value="Add Comment" />

	</form>
	
