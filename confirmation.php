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


</style>

<div class="searchengine">
	<input type="text"/>
	<input type="submit" value="SEARCH"/>
</div>

<?php
	session_start();
	if(!isset($_SESSION['myusername'])){
		header("location:login.php");
	}else{	
		$name = $_SESSION['myusername'];	
	}
?>
	
	Welcome
	<?php
		echo $name
	?>

<body>

	<form name="form1" method="GET" action="payment.php">

		<strong><h1>CONFIRMATION</h1></strong>
		<table>
			<tr><td>PRODUCT NAME</td>
			<td></td><td><input name="productname" type="" id="productname" readonly="readonly" value= "<?php echo htmlentities($_GET["productname"]); ?>" /></td>
			</tr>

			<tr><td>QUANTITY</td> 
			<td></td><td><input name="quantity" type="" id="quantity" readonly="readonly" value="<?php echo htmlentities($_GET["quantity"]); ?>" /></td>
			</tr>

			<tr><td>AMOUNT</td> 
			<td></td><td><input name="amount" type="" id="amount" readonly="readonly" value="<?php echo htmlentities($_GET["amount"]); ?>" /></td>
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
		</form>

		<form method="GET" action="paymentstatus.php">
			<td><center><input type="submit" name="confirmPurchase" value="Confirm Purchase"></center></td></tr>
		</form>

	</table>

	
		
		
		
</body>
