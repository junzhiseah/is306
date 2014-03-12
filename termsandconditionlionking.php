<style type="text/css">
	
	/*copy paste style type=text/css tag together with this body tag into the page you develop.
	 the other tags dont need copy paste into your pages*/
	body{
		margin-left: -0.1%;
		margin-right: -0.1%;
		margin-top: -0.1%;
		
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
				<a href=""><img src="img/Savings-02-48.png" class="homepageicon"/></a>
				


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
		                  	<li><a href="#">Bookmarks</a></li>
		                  	<li><a href="#">My Purchases</a></li>
		                 	 <li><a href="#" >My Deals</a></li>
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


 

    Book by 25 March 2014
    We will not be held responsible for any injuries, mishaps and incidents.
    Event dates: 30 May to 1 June 2014, 9am - 8pm
    Limit 1 deal per person, may buy multiple as gifts
    Valid for bronze seating category only
