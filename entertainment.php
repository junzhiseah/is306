<?php
session_start();
	
if (isset($_GET['bookmark'])) {
	$index = intval($_GET['bookmark']);
	$itemArr = $_SESSION['itemArr'];
	$itemArr[$index]['userbookmarked'] = "Yes";

	unset($_SESSION['itemArr']);
	$_SESSION['itemArr'] = $itemArr;
}
?>

<style type="text/css">
	
	/*copy paste style type=text/css tag together with this body tag into the page you develop.
	 the other tags dont need copy paste into your pages*/
	body{
		margin-left: -0.1%;
		margin-right: -0.1%;
		margin-top: -0.1%;
	}


	div.searchengine{
		text-align: center;
		background-color: #D4D4D4;
		padding:2%;
		padding-top: 3.2%;
		padding-bottom: 3.2%;
	}

	div.searchengine input[type=text]{
		height:5.6%;
	}


	input[type=submit] {
		-moz-box-shadow:inset 0px 1px 0px 0px #00b5b5;
		-webkit-box-shadow:inset 0px 1px 0px 0px #00b5b5;
		box-shadow:inset 0px 1px 0px 0px #00b5b5;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:3px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:3px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:3px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:3px;
		text-indent:0;
		border:1px solid #00b5b5;
		display:inline-block;
		color:#ffffff;
		font-family:Trebuchet MS;
		font-size:14px;
		font-weight:bold;
		font-style:normal;
		height:23px;
		line-height:20px;
		width:70px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #00b5b5;
	}
	input[type=submit]:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
	}input[type=submit]:active {
		position:relative;
		top:1px;
	}

	input[type=buy] {
		-moz-box-shadow:inset 0px 1px 0px 0px #00b5b5;
		-webkit-box-shadow:inset 0px 1px 0px 0px #00b5b5;
		box-shadow:inset 0px 1px 0px 0px #00b5b5;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:3px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:3px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:3px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:3px;
		text-indent:0;
		border:1px solid #00b5b5;
		display:inline-block;
		color:#ffffff;
		font-family:Trebuchet MS;
		font-size:14px;
		font-weight:bold;
		font-style:normal;
		height:23px;
		line-height:20px;
		width:35px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #00b5b5;
	}
	input[type=buy]:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
	}input[type=buy]:active {
		position:relative;
		top:1px;
	}

	input[type=dealinfo] {
		-moz-box-shadow:inset 0px 1px 0px 0px #00b5b5;
		-webkit-box-shadow:inset 0px 1px 0px 0px #00b5b5;
		box-shadow:inset 0px 1px 0px 0px #00b5b5;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:3px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:3px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:3px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:3px;
		text-indent:0;
		border:1px solid #00b5b5;
		display:inline-block;
		color:#ffffff;
		font-family:Trebuchet MS;
		font-size:14px;
		font-weight:bold;
		font-style:normal;
		height:23px;
		line-height:20px;
		width:70px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #00b5b5;
	}
	input[type=dealinfo]:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
	}input[type=dealinfo]:active {
		position:relative;
		top:1px;
	}

	input[type=category] {
		-moz-box-shadow:inset 0px 1px 0px 0px #00b5b5;
		-webkit-box-shadow:inset 0px 1px 0px 0px #00b5b5;
		box-shadow:inset 0px 1px 0px 0px #00b5b5;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:3px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:3px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:3px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:3px;
		text-indent:0;
		border:0px solid #00b5b5;
		display:inline-block;
		color:#ffffff;
		font-family:Trebuchet MS;
		font-size:9px;
		font-weight:bold;
		font-style:normal;
		height:23px;
		line-height:10px;
		width: 66px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #00b5b5;
	}
	input[type=category]:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
	}input[type=category]:active {
		position:relative;
		top:1px;
	}

	div.categories{
		display: inline;
	}

	div.categories2{
		display: inline;
	}

	img.category{
		width:49.3%;
		height:43%;
	}







/*==================================== Nav Bar Code ======================================================*/



	div.navbar{
		height:10.6%;
		/*margin-left: 32%;
		margin-right: 43.4%;*/
	/*	margin-top: 6.2%;*/
		background-color:#3E4651;

	}

	div.navbar img.homepageicon{
		margin-left: 0px;
		width:60px;
		height:53px;
	}	

	div.navbar img.menu{
		margin-left:10px;
		width:40px;
		height:40px;
		margin-bottom:-2px; 
		margin-top: -9px;
	}



	nav ul ul {
		display: none;
	}

	nav ul li:hover > ul {
		display: block;
		/*margin-bottom: 20px;*/
	}


	nav ul {
	padding: 0 0px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
	top:-23px;
	}
	
	nav ul:after {
		content: ""; clear: both; display: block;
	}



	nav ul li {
	float: right;
	margin-left: 140px;
	}

	nav ul li ul li{
		margin-left: 0px;
	}

	nav ul li:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		
	nav ul li:hover a {
		color: #fff;
	}
	
	nav ul li a {
		display: block; /*padding: 13px 10px 0px 10px;*/
		padding:0px;
		color: #757575; text-decoration: none;
		border:0px solid black;
		margin-top: 11px;

		/*height:40px;*/

	/*	margin-left: 120px;*/
	}


	nav ul ul {
	background: #5f6975; border-radius: 0px; padding: 0;
	position: absolute; top: 100%;
	right:auto;
	left:100px;
	}

	nav ul ul li {
		float: none; 
		border-top: 1px solid #6b727c;
		border-bottom: 1px solid #575f6a;
		position: relative;
	}

	nav ul ul li a {
		padding: 15px 20px 15px 20px;
		width:70px;
		color: #fff;
	}	
		
	nav ul ul li a:hover {
		background: #4b545f;
	}



</style>



<!--==================================== Nav Bar Code ======================================================-->



<div class="navbar">
		<nav>
				<a href="index.php"><img src="img/Savings-02-48.png" class="homepageicon"/></a>
				


				<ul>
				<li>

					<a href="#" data-toggle="dropdown"><img src="img/Table-of-Contents-48.png" class="menu"/></a>	

					<?php if(!isset($_SESSION['myusername'])){ ?>
							<ul class="dropdown-menu">
								  <li><a href="">Home</a></li>	
								   <li><a href="login.php">Login</a></li>	
								   <li><a href="">Register</a></li>	
								    <li><a href="">Help</a></li>	
		                	</ul>

					<?php } else{ ?>
						<ul class="dropdown-menu">
							 <li><a href="">Home</a></li>	
		                 	 <li><a href="richardprofile.php">My Profile</a></li>
		                  	<li><a href="bookmark.php">Bookmarks</a></li>
		                  	<li><a href="payment.php">My Purchases</a></li>
		                 	 <li><a href="#" >My Deals</a></li>
		                  	<li><a href="#" >Logout</a></li>
		                </ul>	
					<?php } ?>

				<!-- 	<ul class="dropdown-menu">
					  <li><a href="">Home</a></li>	
					   <li><a href="">Login</a></li>	
					   <li><a href="">Register</a></li>	
					    <li><a href="">Help</a></li>	
	                </ul>
 -->
             	</li>
             	</ul>
               	
		</nav>		
	</div>	


 


<?php 

if(isset($_SESSION['myusername'])){
		$name = $_SESSION['myusername'];	

		echo 'Welcome ';
		echo $name;
	}
?>




<div class="searchengine">
	<form action="search.php" method="POST">
		<input type="text" name="search" />
		<input type="submit" value="SEARCH"/>
	</form>
</div>

	




	<table border = "1">
		<tr>
			<td align = "center"><a href = "featured.php"><img src="img/Featured1.jpg" height = "30px" width = "66px"></a></td>
			<td align = "center"><a href = "entertainment.php"><img src="img/Entertainment.jpg" height = "30px" width = "66px"></a></td>
			<td align = "center"><a href = "food.php"><img src="img/Food1.jpg" height = "30px" width = "66px"></a></td>
			<td align = "center"><a href = "travel.php"><img src="img/Travel1.jpg" height = "30px" width = "66px"></a></td>

		</tr>
	</table>
	<table border = "1">
		<tr>
			<td align = "center" ><a href = "dealinfo.php?itemid=0"><img src="img/IceArt.jpg" height = "150px" width = "150px"></a></td>
			<td align = "center"><b>2 Degree Ice Art</b><br>
				<strike>$30</strike> <a style="color:red">$15</a> / Tix<br>
				<i>Expiry: 27 Mar 2014</i><br>
				<input type = "buy" value = "Buy!" height = "10px" width = "20px">   <a href = "dealinfo.php?itemid=0"><input type = "dealinfo" value = "Deal Info"></a>
				<a href="entertainment.php?bookmark=0"><input type = "dealinfo" value = "Bookmark"></a>
			</td>
		</tr>
		<tr>
			<td align = "center" ><a href = "dealinfo.php?itemid=1"><img src="img/LionKing.jpg" height = "150px" width = "150px"></a></td>
			<td align = "center"><b>Lion King Musical</b><br>
				<strike>$75</strike> <a style="color:red">$25</a> / Tix<br>
				<i>Expiry: 28 Mar 2014</i><br>
				<input type = "buy" value = "Buy!" height = "10px" width = "20px">   <a href = "dealinfo.php?itemid=1"><input type = "dealinfo" value = "Deal Info"></a>
				<a href="entertainment.php?bookmark=1"><input type = "dealinfo" value = "Bookmark"></a>
			</td>
		</tr>
		<tr>
			<td align = "center" ><a href = "dealinfo.php?itemid=2"><img src="img/AhBoysToMen.jpg" height = "150px" width = "150px"></a></td>
			<td align = "center"><b>Ah Boys to Men the Musical</b><br>
				<strike>$95</strike> <a style="color:red">$50</a> / Tix<br>
				<i>Expiry: 27 Mar 2014</i><br>
				<input type = "buy" value = "Buy!" height = "10px" width = "20px">   <a href = "dealinfo.php?itemid=2"><input type = "dealinfo" value = "Deal Info"></a>
				<a href="entertainment.php?bookmark=2"><input type = "dealinfo" value = "Bookmark"></a>

			</td>
		</tr>

	</table>
