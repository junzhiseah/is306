<?php
session_start();
$itemArr =$_SESSION['itemArr'];


if (isset($_GET['bookmark'])) {
	$index = intval($_GET['bookmark']);
	$itemArr = $_SESSION['itemArr'];
	$itemArr[$index]['userbookmarked'] = "Yes";

	unset($_SESSION['itemArr']);
	$_SESSION['itemArr'] = $itemArr;
}
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<style type="text/css">
	
	/*copy paste style type=text/css tag together with this body tag into the page you develop.
	 the other tags dont need copy paste into your pages*/
	body{
		margin-left: -0.1%;
		margin-right: -0.1%;
		margin-top: -0.1%;
		/*background-color: #F1654C;*/
		/*background-color:#3E4651;*/
	}

	div.searchmessage{
			border-bottom:3px solid #D4D4D4;
			padding-bottom: 10px;
	}


	div.searchengine{
		text-align: center;
		/*background-color: #D4D4D4;*/
		background-color:#FFFFFF;
		padding:2%;
		padding-top: 3.2%;
		padding-bottom: 0px;
	}

	div.searchengine input[type=text]{
		height:27px;
		margin-right:-6px;
		width:160px;
		border:0px;
	}


	input[type=text]{
		background-color: #3E4651;
		color:white;
	}

	input[type=submit] {
		-moz-box-shadow:inset 0px 1px 0px 0px #F1654C;
		-webkit-box-shadow:inset 0px 1px 0px 0px #F1654C;
		box-shadow:inset 0px 1px 0px 0px #F1654C;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #F1654C), color-stop(1, #F1654C) );
		background:-moz-linear-gradient( center top, #F1654C 5%, #F1654C 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#F1654C', endColorstr='#F1654C');
		background-color:#F1654C;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:1px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:1px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:1px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:1px;
		text-indent:0;
		border:1px solid #F1654C;
		display:inline-block;
		color:#ffffff;
		font-family:Trebuchet MS;
		font-size:13px;
		font-weight:bold;
		font-style:normal;
		height:27px;
		line-height:22px;
		width:58px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #F1654C;
	}
	input[type=submit]:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #F1654C), color-stop(1, #F1654C) );
		background:-moz-linear-gradient( center top, #F1654C 5%, #F1654C 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#F1654C', endColorstr='#F1654C');
		background-color:#F1654C;
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
		border-top-left-radius:0px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:0px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:0px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:0px;
		text-indent:0;
		border:1px solid #00b5b5;
		display:inline-block;
		color:#ffffff;
		font-family:Trebuchet MS;
		font-size:10px;
		font-weight:bold;
		font-style:normal;
		height:23px;
		line-height:20px;
		width:55px;
		text-decoration:none;
		margin-right: -4px;
		margin-left:2px;
		text-align:center;
		text-shadow:1px 1px 0px #00b5b5;
	}
	input[type=buy]:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #F1654C), color-stop(1, #F1654C) );
		background:-moz-linear-gradient( center top, #F1654C 5%, #F1654C 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#F1654C', endColorstr='#F1654C');
		background-color:#F1654C;
	}input[type=buy]:active {
		position:relative;
		top:1px;
	}

	input[type=dealinfo] {
		-moz-box-shadow:inset 0px 1px 0px 0px #3E4651;
		-webkit-box-shadow:inset 0px 1px 0px 0px #3E4651;
		box-shadow:inset 0px 1px 0px 0px #3E4651;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3E4651), color-stop(1, #3E4651) );
		background:-moz-linear-gradient( center top, #3E4651 5%, #3E4651 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3E4651', endColorstr='#3E4651');
		background-color:#3E4651;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:0px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:0px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:0px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:0px;
		text-indent:0;
		border:1px solid #3E4651;
		display:inline-block;
		color:#ffffff;
		font-family:Trebuchet MS;
		font-size:10px;
		font-weight:bold;
		font-style:normal;
		height:23px;
		line-height:20px;
		margin-right: 0px;
		margin-left: 0px;
		width:60px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #3E4651;
	}
	input[type=dealinfo]:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #F1654C), color-stop(1, #F1654C) );
		background:-moz-linear-gradient( center top, #F1654C 5%, #F1654C 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#F1654C', endColorstr='#F1654C');
		background-color:#F1654C;
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

	input[type=bookmark] {
		-moz-box-shadow:inset 0px 1px 0px 0px #00b5b5;
		-webkit-box-shadow:inset 0px 1px 0px 0px #00b5b5;
		box-shadow:inset 0px 1px 0px 0px #00b5b5;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
		-webkit-border-top-left-radius:3px;
		-moz-border-radius-topleft:3px;
		border-top-left-radius:0px;
		-webkit-border-top-right-radius:3px;
		-moz-border-radius-topright:3px;
		border-top-right-radius:0px;
		-webkit-border-bottom-right-radius:3px;
		-moz-border-radius-bottomright:3px;
		border-bottom-right-radius:0px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-bottomleft:3px;
		border-bottom-left-radius:0px;
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
		margin-right: -59px;
		margin-top: -13px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #00b5b5;
	}
	input[type=bookmark]:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
	}input[type=bookmark]:active {
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







/*==================================== Table Results Thumbnail Code ======================================================*/



	div.title{
		text-align: center;
		margin-top: 0px;
		margin-bottom:5px;
		font-weight: bold;
		color:#3E4651;
		font-size:15px;
		border-bottom:11px solid #D4D4D4;

	}


	table{
		border-collapse: collapse;
	}

	table.categories{
		margin:0px;
		padding:0px;
		border:2px solid #D4D4D4;
	}

	table.categories tr td{
		border-left:6px solid #D4D4D4;
		border-right:5px solid #D4D4D4;
		margin:0px;
		padding:0px;
	}

	table tr.space{
		height:7px;
	}

	table tr.space td{
		/*background-color: #F1654C;*/
		border-bottom:11px solid #D4D4D4;
		/*background-color: #FFFFFF;*/
	}

	table tr td{
		padding:3px;
	}

	table tr td.icon img{
		border-radius: 20px;
		width:158px;
		height:135px;
	}

	table tr td.icon{
		padding-left: 5px;
		padding-right: 5px;
		padding-bottom: 5px;
		padding-top:10px;
	}

	table tr td.title{
		color:#3E4651;
		font-size:15px;
	}

	table tr td.price{
		color:#949494;
		font-size:12px;
		padding-left: 10px;
	}


	table tr td.price a{
		font-size:24px;
		text-align: right;
		color:#00B5B5;
		font-weight: bold;
	/*	font-family: Arial;*/
	}



	table tr td.expiry{
		font-size:12px;
		text-align: right;
		color:#949494;
		padding-right: 10px;
	/*	font-family: Arial;*/
	}

	div.searchmessage{
		margin-top: 5px;
		font-size:11px;
		color:#949494;
		text-align: center;
	}

	div.searchmessage a{
		font-size:12px;
		color:#3E4651;
		font-weight: bold;
		text-decoration: none;
	}

	h5.message{
		text-align: center;
		font-size:11px;
		color:#949494;
		font-weight: normal;
	}





/*==================================== Nav Bar Code ======================================================*/



	div.navbar{
		height:10.6%;
		/*margin-left: 32%;
		margin-right: 43.4%;*/
	/*	margin-top: 6.2%;*/
		background-color:#3E4651;
		/*position:fixed;*/

	}

	div.navbar img.homepageicon{
		margin-left: 0px;
		width:60px;
		height:53px;
	}	

	div.navbar img.menu{
		margin-left:45px;
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
	right:6px;
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
		background: #F1654C;
	}
	
	nav ul li a {
		display: block; /*padding: 13px 10px 0px 10px;*/
		padding:0px;
		padding-right:0px;
		color: #757575; text-decoration: none;
		border:0px solid black;
		margin-top: 0px;
		padding-top: 25px;
		height:31px;
		width:89px;

		/*height:40px;*/

	/*	margin-left: 120px;*/
	}


	nav ul ul {
	background: #F1654C; border-radius: 0px; padding: 0;
	position: absolute; top: 100%;
	right:auto;
	left:100px;
	}

	nav ul ul li {
		float: none; 
		border-top: 0px solid #D4D4D4;
		border-bottom: 1px solid #D4D4D4;
		position: relative;
	}

	nav ul ul li a {
		padding: 15px 20px 15px 20px;
		width:95px;
		color: #fff;
		margin-top: 0px;
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
								  <li><a href="index.php">Home</a></li>	
								   <li><a href="login.php">Login</a></li>	
								   <li><a href="register.php">Register</a></li>	
								    <li><a href="help.php">Help</a></li>	
		                	</ul>

					<?php } else{ ?>
						<ul class="dropdown-menu">
							 <li><a href="index.php">Home</a></li>	
		                 	 <li><a href="richardprofile.php">My Profile</a></li>
		                  	<li><a href="bookmark.php">Bookmarks</a></li>
		                  	<li><a href="purchases.php">My Purchases</a></li>
		                 	<li><a href="#" >My Listings</a></li>
		                 	 <li><a href="help.php" >Help</a></li>
		                  	<li><a href="validatelogout.php" >Logout</a></li>
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



		<div class="searchmessage">



			<div class="searchengine">
				<form action="search.php" method="GET">
					<input type="text" name="search" />
					<input type="submit" value="SEARCH"/>
				</form>
			</div>

			Click <a href="index.php">here</a> to search from 1 of the 4 Categories
	
		</div> 

	<br/>


<div class="title">
	<img src="img/Search-24.png"/>
	<br/>
	Search Results
</div>



<?php
	$search = $_GET['search'];
	$results = array();

	foreach ($itemArr as $key => $value) {
		$title = $value['title'];
		$description = $value['description'];
		$merchant = $value['merchant'];
		$venue = $value['venue'];

		if (stristr($title, $search) !== FALSE || stristr($description, $search) !== FALSE
				|| stristr($merchant, $search) !== FALSE || stristr($venue, $search) !== FALSE) {
			array_push($results, $value);
		}
	}

	if (sizeof($results) > 0) {
		echo '<table border = "0">';
		$dateTime = new DateTime();
		for ($i=0; $i < sizeof($results); $i++) { 
			$item = $results[$i];

			$expiry = $item['expiry'];
			// $expiryDate = DateTime::createFromFormat('d M Y', $expiry);
			$quantitySold = $item['quantitysold'];
			$quantityAvail = $item['quantityavail'];


			echo '<tr>';
			echo '<td class="icon" align = "center" > <a href = "dealinfo.php?itemid='.$item['id'].'"><img src="'.$item['image'].'"></a></td>';
			echo '<td class="title" align = "center">';
			echo '<a href="search.php?bookmark='.$item['id'].'&search='.$search.'"><input type = "bookmark" value = "Bookmark"></a><br/><br/>';
			echo '<b>'.$item['title'].'</b><br><br/>';
			
			echo '  <a href = "dealinfo.php?itemid='.$item['id'].'"><input type = "dealinfo" value = "Deal Info"></a>';
			
			
			echo '<a href = "payment.php?itemid='.$item['id'].'"><input type = "buy" value = "Buy!" height = "10px" width = "20px"></a></td>';
			echo '<tr><td class="price"><strike>$'.$item['usualprice'].'</strike> <a style="color:#00B5B5"> $'.$item['currentprice'].'</a> /'.$item['quantifier'].'</td>';

			echo '<td class="expiry">'.$item['expiry'].'</td></tr>';
			// if ($dateTime > $expiryDate || $quantitySold == $quantityAvail) {
			// 	echo '<br><a style="color:red"><b> EXPIRED </b><a>';
			// }

			
			echo '<tr class="space"><td></td><td></td></tr>';
		}
		echo '</table>';


		?>




<?php
	} else { ?>
		


	

			<h5 class="message">There are no deals matching your search inputs. <br/><br/><br/>
			</h5>


	<?php
	}
?>