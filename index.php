<style type="text/css">
	
	/*copy paste style type=text/css tag together with this body tag into the page you develop.
	 the other tags dont need copy paste into your pages*/
	body{
		margin-left: -0.1%;
		margin-right: -0.1%;
		margin-top: -0.1%;
		background-color: #FFFFFF;
	}


	div.searchengine{
		text-align: center;
		/*background-color: #D4D4D4;*/
		background-color:#FFFFFF;
		padding:2%;
		padding-top: 3.2%;
		padding-bottom: 3.2%;
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

	div.categories{
		display: inline;
	}

	div.categories2{
		display: inline;
	}

	img.category{
		width:48.6%;
		height:37.3%;
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


<?php
session_start();

$itemArr = array(
		0 => array (
			'id' => '0',
			'image' => 'img/IceArt.jpg',
			'title' => '2 Degree Ice Art',
			'description' => '2 Degree Ice Art Tickets for Sale!',
			'date' => '30 Mar 2014',
			'start' => '1200',
			'end' => '2200',
			'venue' => 'Sheares Link , Bay Front Ave, Singapore, Singapore',
			'merchant' => 'iceart',
			'merchantaddress' => '110 Alexandra Road Singapore 159921',
			'merchantphone' => '90000000',
			'itemlikes' => '0',
			'merchantlikes' => '30',
			'quantitysold' => '2',
			'quantityavail' => '10',
			'usualprice' => '30',
			'currentprice' => '15',
			'quantifier' => 'Tix',
			'useritemliked' => 'No',
			'usermerchantliked' => 'No',
			'userbookmarked' => 'No',
			'expiry' => '27 Mar 2014',
		), 
		1 => array (
			'id' => '1',
			'image' => 'img/LionKing.jpg',
			'title' => 'Lion King Musical',
			'description' => 'Lion King Musical Tickets for Sale!',
			'date' => '30 Mar 2014',
			'start' => '1800',
			'end' => '2100',
			'venue' => '2 Stadium Walk, 397691 Singapore Indoor Stadium',
			'merchant' => 'lionking',
			'merchantaddress' => 'Blk 727 Ang Mo Kio Ave 6 #01-4246 Singapore 560727',
			'merchantphone' => '90000002',
			'itemlikes' => '2',
			'merchantlikes' => '31',
			'quantitysold' => '2',
			'quantityavail' => '20',
			'usualprice' => '75',
			'currentprice' => '25',
			'quantifier' => 'Tix',
			'useritemliked' => 'No',
			'usermerchantliked' => 'No',
			'userbookmarked' => 'No',
			'expiry' => '28 Mar 2014',
		), 
		2 => array (
			'id' => '2',
			'image' => 'img/AhBoysToMen.jpg',
			'title' => 'Ah Boys to Men the Musical',
			'description' => 'Ah Boys to Men the Musical Tickets for Sale!',
			'date' => '29 Mar 2014',
			'start' => '1900',
			'end' => '2200',
			'venue' => '2 Stadium Walk, 397691 Singapore Indoor Stadium',
			'merchant' => 'ahboystomen',
			'merchantaddress' => '20 Toh Yi Drive #01-05 Singapore 596569',
			'merchantphone' => '90000002',
			'itemlikes' => '1',
			'merchantlikes' => '32',
			'quantitysold' => '2',
			'quantityavail' => '25',
			'usualprice' => '95',
			'currentprice' => '50',
			'quantifier' => 'Tix',
			'useritemliked' => 'No',
			'usermerchantliked' => 'No',
			'userbookmarked' => 'No',
			'expiry' => '27 Mar 2014',
		), 
		3 => array (
			'id' => '3',
			'image' => 'img/CrystalJade.jpg',
			'title' => 'Crystal Jade Char Siew Bun',
			'description' => 'Delicious Char Siw Bun for Sale!',
			'date' => '27 Mar 2014',
			'start' => '1800',
			'end' => '2200',
			'venue' => '1 Jurong West Central 2, #03-07 Jurong Point Shopping Centre,',
			'merchant' => 'crystaljade',
			'merchantaddress' => '51 Bishan St. 13 #01-03 Singapore 579799',
			'merchantphone' => '90000003',
			'itemlikes' => '2',
			'merchantlikes' => '33',
			'quantitysold' => '2',
			'quantityavail' => '50',
			'usualprice' => '1.80',
			'currentprice' => '1.20',
			'quantifier' => 'Bun',
			'useritemliked' => 'No',
			'usermerchantliked' => 'No',
			'userbookmarked' => 'No',
			'expiry' => '27 Mar 2014',
		), 
		4 => array (
			'id' => '4',
			'image' => 'img/SakaeSushi.jpg.jpg',
			'title' => 'Sakae Sushi Takeaway',
			'description' => 'Delicious Sakae Sushi Takeaway for Sale!',
			'date' => '28 Mar 2014',
			'start' => '1800',
			'end' => '2200',
			'venue' => '501 Orchard Road #02-18, Wheelock Place',
			'merchant' => 'sakaesushi',
			'merchantaddress' => 'Blk 218 Bedok North St. 1 #01-49 Singapore 460218',
			'merchantphone' => '90000004',
			'itemlikes' => '1',
			'merchantlikes' => '34',
			'quantitysold' => '2',
			'quantityavail' => '50',
			'usualprice' => '3.50',
			'currentprice' => '2.10',
			'quantifier' => 'Box',
			'useritemliked' => 'No',
			'usermerchantliked' => 'No',
			'userbookmarked' => 'No',
			'expiry' => '28 Mar 2014',
		),
		5 => array (
			'id' => '5',
			'image' => 'img/BreadTalk.jpg',
			'title' => 'Bread Talk Chicken Floss Bread',
			'description' => 'Delicious Chicken Floss Bread for Sale!',
			'date' => '27 Mar 2014',
			'start' => '1800',
			'end' => '2200',
			'venue' => '3 Temasek Boulevard #B1-167/168
Suntec City Mall, S(038986) ',
			'merchant' => 'breadtalk',
			'merchantaddress' => 'Blk 231 Bain Street #01-03 Singapore 180231',
			'merchantphone' => '90000005',
			'itemlikes' => '2',
			'merchantlikes' => '35',
			'quantitysold' => '2',
			'quantityavail' => '50',
			'usualprice' => '1.50',
			'currentprice' => '0.90',
			'quantifier' => 'Bread',
			'useritemliked' => 'No',
			'usermerchantliked' => 'No',
			'userbookmarked' => 'No',
			'expiry' => '27 Mar 2014',
		),
		6 => array (
			'id' => '6',
			'image' => 'img/Japan.jpg',
			'title' => 'Two way Travel Tix to Japan',
			'description' => 'Two ways Travel Tix to Japan for Sale! Flight depart on 29 Mar 2014 and return back to Singapore on 4th April 2014 at 1500hrs',
			'date' => '29 Mar 2014',
			'start' => '1200',
			'end' => '1200',
			'venue' => 'Changi Airport Terminal 1',
			'merchant' => 'japan',
			'merchantaddress' => '1 Bukit Batok Central Link #05-09 Singapore 658713',
			'merchantphone' => '90000006',
			'itemlikes' => '1',
			'merchantlikes' => '36',
			'quantitysold' => '2',
			'quantityavail' => '4',
			'usualprice' => '128',
			'currentprice' => '88',
			'quantifier' => 'Tix',
			'useritemliked' => 'No',
			'usermerchantliked' => 'No',
			'userbookmarked' => 'No',
			'expiry' => '27 Mar 2014',
		),
		7 => array (
			'id' => '7',
			'image' => 'img/France.jpg',
			'title' => 'Trip to France',
			'description' => 'Flight Tickets to Paris, Hotel stay and breakfast accomdation included for 4 days 3 nights. Return back to Singapore on 2nd April 2014 at 1300hrs',
			'date' => '30 Mar 2014',
			'start' => '0200',
			'end' => '0200',
			'venue' => 'Changi Airport Terminal 2',
			'merchant' => 'france',
			'merchantaddress' => 'Blk 165 Bukit Merah Central #01-3689 Singapore 150165',
			'merchantphone' => '90000007',
			'itemlikes' => '2',
			'merchantlikes' => '37',
			'quantitysold' => '2',
			'quantityavail' => '4',
			'usualprice' => '300',
			'currentprice' => '150',
			'quantifier' => 'Trip',
			'useritemliked' => 'No',
			'usermerchantliked' => 'No',
			'userbookmarked' => 'No',
			'expiry' => '28 Mar 2014',
		),
		8 => array (
			'id' => '8',
			'image' => 'img/Korea.jpg',
			'title' => 'One way Travel Tix to Korea',
			'description' => 'One way Travel Tix to Korea for Sale! Flight depart on 30 Mar 2014',
			'date' => '30 Mar 2014',
			'start' => '1600',
			'end' => '1600',
			'venue' => 'Changi Airport Terminal 3',
			'merchant' => 'korea',
			'merchantaddress' => '10 Choa Chu Kang Rd Track 10 Singapore 689379',
			'merchantphone' => '90000008',
			'itemlikes' => '1',
			'merchantlikes' => '38',
			'quantitysold' => '2',
			'quantityavail' => '5',
			'usualprice' => '478',
			'currentprice' => '128',
			'quantifier' => 'Tix',
			'useritemliked' => 'No',
			'usermerchantliked' => 'No',
			'userbookmarked' => 'No',
			'expiry' => '27 Mar 2014',
		)
	);

	$_SESSION['itemArr'] = $itemArr;
?>


<!--==================================== Nav Bar Code ======================================================-->



<div class="navbar">
		<nav>
				<a href=""><img src="img/Savings-02-48.png" class="homepageicon"/></a>
				


				<ul>
				<li>

					<a href="#" data-toggle="dropdown"><img src="img/Table-of-Contents-48.png" class="menu"/></a>	

					<?php if(!isset($_SESSION['myusername'])){ ?>
							<ul class="dropdown-menu">
								  <li><a href="index.php">Home</a></li>	
								   <li><a href="login.php">Login</a></li>	
								   <li><a href="">Register</a></li>	
								    <li><a href="">Help</a></li>	
		                	</ul>

					<?php } else{ ?>
						<ul class="dropdown-menu">
							 <li><a href="">Home</a></li>	
		                 	 <li><a href="richardprofile.php">My Profile</a></li>
		                  	<li><a href="bookmark.php">Bookmarks</a></li>
		                  	<li><a href="#">My Purchases</a></li>
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

		echo 'Welcome, ';
		echo '<b>'.$name.'</b>';
	}
?>




	
	<div class="searchengine">
		<input type="text"/>
		<input type="submit" value="SEARCH"/>
	</div>	



	<div class="categories1">
	<a href = "featured.php"><img src="img/thumbsupcat.png" class="category"></a>
	<a href = "entertainment.php"><img src="img/entertainmentcat.jpg" class="category"></a>
	</div>


	<div class="categories2">
	<a href = "food.php"><img src="img/foodcat.png" class="category"></a>
	<a href = "travel.php"><img src="img/travelcat.png" class="category"></a>
	</div>



