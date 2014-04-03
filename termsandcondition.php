<style type="text/css">
	
	/*copy paste style type=text/css tag together with this body tag into the page you develop.
	 the other tags dont need copy paste into your pages*/
	body{
		margin-left: -0.1%;
		margin-right: -0.1%;
		margin-top: -0.1%;
		
	}

	div.termsandconditions{
		margin-bottom: 25px;
		font-size:15px;
		font-weight:bold;
		color:#3E4651;
		text-align: center;
		padding-top:10px;
		border-bottom:3px solid #D4D4D4;
	}	

	div.message{
		text-align:center;
		padding:10px;
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


	button.goback {
		-moz-box-shadow:inset 0px 1px 0px 0px #00B5B5;
		-webkit-box-shadow:inset 0px 1px 0px 0px #00B5B5;
		box-shadow:inset 0px 1px 0px 0px #00B5B5;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00B5B5), color-stop(1, #00B5B5) );
		background:-moz-linear-gradient( center top, #00B5B5 5%, #00B5B5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00B5B5', endColorstr='#00B5B5');
		background-color:#00B5B5;
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
		border:1px solid #00B5B5;
		display:inline-block;
		color:#ffffff;
		font-family:Trebuchet MS;
		font-size:13px;
		font-weight:bold;
		font-style:normal;
		height:47px;
		margin-left: 50px;
		line-height:22px;
		margin-top: 30px;
		width:200px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #00B5B5;
	}
	button.goback:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #F1654C), color-stop(1, #F1654C) );
		background:-moz-linear-gradient( center top, #F1654C 5%, #F1654C 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#F1654C', endColorstr='#F1654C');
		background-color:#F1654C;
	}button.goback:active {
		position:relative;
		top:1px;
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



 
	<div class="termsandconditions">
		<img src="img/Rules-24.png"><br/>
		Terms and Conditions
	</div>


	<div class="message">
	    Each listing has a validity of maximum 3 days. <br/>
	    The management of Lei Long will not be held responsible for any refunds, returns, injuries, mishaps and incidents.<br/>
	    Event dates and timings: 3 weeks from now till the day of sales itself, 9am - 8pm.<br/>
	    Limited to 1 deal per person, may buy multiple as gifts.<br/>
	    Valid for bronze seating category, only applicable to entertainment deals.
	</div>

	<button type="button" class="goback" id = "gobackbutton" onclick="history.go(-1);">Go Back to Deal</button>