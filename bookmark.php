<?php
session_start();
$itemArr = $_SESSION['itemArr'];
?>

<style type="text/css">
	
	/*copy paste style type=text/css tag together with this body tag into the page you develop.
	 the other tags dont need copy paste into your pages*/
	body{
		margin-left: -0.1%;
		margin-right: -0.1%;
		margin-top: -0.1%;
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
</style>

<?php
	if (isset($_GET['itemid'])) {
		$itemId = $_GET['itemid'];

		$itemArr[$itemId]['userbookmarked'] = "No";

		unset($_SESSION['itemArr']);
		$_SESSION['itemArr'] = $itemArr;
	}

	$bookmarkArr = array();
	foreach ($itemArr as $key => $value) {
		$bookmark = $value['userbookmarked'];

		if ($bookmark == "Yes") {
			array_push($bookmarkArr, $value);
		}
	}

	
	if (sizeof($bookmarkArr) > 0) {
		echo '<table border = "1">';
		$dateTime = new DateTime();
		for ($i=0; $i < sizeof($bookmarkArr); $i++) { 
			$item = $bookmarkArr[$i];

			$expiry = $item['expiry'];
			$expiryDate = DateTime::createFromFormat('d M Y', $expiry);
			$quantitySold = $item['quantitysold'];
			$quantityAvail = $item['quantityavail'];

			echo '<tr>';
			echo '<td align = "center" ><img src="'.$item['image'].'" height = "150px" width = "150px"></td>';
			echo '<td align = "center"><b>'.$item['title'].'</b><br>';
			echo '<strike>$'.$item['usualprice'].'</strike> <a style="color:red"> $'.$item['currentprice'].'</a> /'.$item['quantifier'].'<br>';
			echo '<i>'.$item['expiry'].'</i><br>';
			echo '<a href = "payment.php?itemid='.$item['id'].'"><input type = "buy" value = "Buy!" height = "10px" width = "20px"></a>   <a href = "dealinfo.php?itemid='.$item['id'].'"><input type = "dealinfo" value = "Deal Info"></a><br>';
			if ($dateTime > $expiryDate || $quantitySold == $quantityAvail) {
				echo '<br><a style="color:red"><b> EXPIRED </b><a>';
			}

			echo '<form action="bookmark.php" metho="GET">';
			echo '<input type="hidden" name="itemid" value="'.$item['id'].'" />';
			echo '<input type="submit" value="Remove" />';
			echo '</form>';

			echo '</td>';
			echo '</tr>';
		}
		echo '</table>';
	} else {
		echo 'You have no deals in your <b>BOOKMARKS</b> folder at the moment.';
	}
?>