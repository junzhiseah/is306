<style type="text/css">
	
	/*copy paste style type=text/css tag together with this body tag into the page you develop.
	 the other tags dont need copy paste into your pages*/
	body{
		margin-left: -0.1%;
		margin-right: -0.1%;
		margin-top: -0.1%;
		
	}

	div.help{
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



 
	<div class="help">
		<img src="img/Rules-24.png"><br/>
		Help
	</div>


	<div class="message">
		<b>Logo</b> <br/>
	    - Logo: Home page<br/><br/>

	    <b>Navigator Bar</b> <br/>
	    - Home: Home page<br/>
	    - Login: Login with username and password<br/>
	    - Register: Register for an account<br/>
	    - My Profile: View and edit profile<br/>
	    - Bookmarks: View deals that are bookmarked<br/>
	    - My Purchases: View deals that are purchased<br/>
	    - My Listing: View deals that are listed<br/>
	    - Logout: Logout<br/><br/>

	    <b>Search</b> <br/>
	    - Search: Search for a deal with keyword<br/><br/>

	    <b>Others</b> <br/>
	    - Deal Info: Detailed Information about the respective deal<br/>
	    - Buy!: Purchase the deal<br/>
	    - Bookmark: Bookmark the deal<br/>
	    - Call icon: Call the respective merchant<br/>
	    - Like icon: Like the respective deal/merchant<br/>
	    - Comment: Comment on the respective deal/merchant<br/>
	    
	</div>