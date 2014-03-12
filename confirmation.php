<?php
session_start();

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


 


<?php 

if(isset($_SESSION['myusername'])){
		$name = $_SESSION['myusername'];	

		echo 'Welcome ';
		echo $name;
	}
?>





<?php
	if(!isset($_SESSION['myusername'])){
		header("location:login.php");
	}

	$itemid = $_GET['itemid'];
	$itemArr = $_SESSION['itemArr'];

	$item = $itemArr[intval($itemid)];
?>
	

	Welcome
	<?php
		echo $name;
	?>


<body>

	<form name="form1" method="GET" action="payment.php?itemid='<?php echo $item['id']; ?>'">

		<strong><h1>CONFIRMATION</h1></strong>
		<table>
			<tr><td>PRODUCT NAME</td>
			<td></td><td><input name="productname" type="" id="productname" readonly="readonly" value= "<?php echo htmlentities($_GET["productname"]); ?>" /></td>
			</tr>

			<tr><td>QUANTITY</td> 
			<td></td><td><input name="quantity" type="" id="quantity" readonly="readonly" value="<?php echo htmlentities($_GET["quantity"]); ?>" /></td>
			</tr>

			<?php
				$quantity = (integer)htmlentities($_GET["quantity"]);
				$price = (integer)htmlentities($_GET["price"]);
				$totalamount = $quantity * $price;

				echo $quantity;
				echo $price;
			?>
			<tr><td>PRICE</td> 
			<td></td><td>$<input name="price" type="" id="price" readonly="readonly" value="<?php echo htmlentities($_GET["price"]); ?>" /></td>
			</tr>

			<tr><td>TOTAL AMOUNT</td> 
			<td></td><td>$<input name="totalamount" type="" id="totalamount" readonly="readonly" value="<?php echo $totalamount ?>" /></td>
			</tr>

			<tr><td>CARD NO</td> 
			<td></td><td><input name="cardno" type="" id="cardno" readonly="readonly" value="<?php echo htmlentities($_GET["cardno"]); ?>" /></td>
			</tr>

			<tr><td>CVV</td> 
			<td></td><td><input name="cvv" type="" id="cvv" readonly="readonly" value="<?php echo htmlentities($_GET["cvv"]); ?>" /></td>
			</tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
			<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

			<tr><td><center><input type="submit" name="editPurchase" value="Edit Purchase"></center></td>
			<input type = "hidden" name = "itemid" value = "<?php echo $item['id']; ?>">
		</form>

		<form method="GET" action="paymentstatus.php">
			<input type="hidden" name="itemid" value="<?php echo $item['id'] ?>" />
			<input type="hidden" name="quantity" value="<?php echo intval($_GET['quantity']); ?>" />
			<td><center><input type="submit" name="confirmPurchase" value="Confirm Purchase"></center></td></tr>
		</form>

	</table>

	
		
		
		
</body>
