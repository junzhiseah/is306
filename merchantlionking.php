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
		/*background-color: #F1654C;*/
		/*background-color:#3E4651;*/
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
		border-radius: 40px;
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



	input[type=call] {
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
		height:30px;
		line-height:20px;
		width:210px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #00b5b5;
	}
	input[type=call]:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
	}input[type=call]:active {
		position:relative;
		top:1px;
	}

	input[type=cancel] {
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
		height:30px;
		line-height:20px;
		width:210px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #00b5b5;
	}
	input[type=cancel]:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #00b5b5), color-stop(1, #00b5b5) );
		background:-moz-linear-gradient( center top, #00b5b5 5%, #00b5b5 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00b5b5', endColorstr='#00b5b5');
		background-color:#00b5b5;
	}input[type=cancel]:active {
		position:relative;
		top:1px;
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




/*====================Css for this page main container downwards ================================*/

	div.profile div.profiletitle{
		margin-bottom: 10px;
		font-size:15px;
		font-weight:bold;
		color:#3E4651;
		text-align: center;
		padding-top: 10px;
		border-bottom:11px solid #D4D4D4;
	}	

	div.profile img.profilepic{
		width:140px;
		height:130px;
		border-radius: 16px;
		margin-left:70px;
	}

	div.maincontainer{
		padding-left:5px;
		padding-right: 5px;
	}

	div.maincontainer h5.nameemail{
		font-size: 13px;
		color:#black;
		margin-bottom: 0px;
		margin-top: 0px;
	}	

	div.maincontainer h4.likes{
		font-size: 13px;
		color:#black;
		margin-bottom: 0px;
		margin-top: -45px;
		margin-left: 205px;
	}	

	div.maincontainer h5.contact{
		font-size: 13px;
		color:#black;
		margin-bottom: 0px;
		margin-top: 0px;
	}	


	div.maincontainer img.call{
		margin-top: 20px;
	}










	nav.call ul.call li.call a img{
		margin-top:-30px;
		margin-left:2px;
	}





	nav.call ul.call ul.dropdown-menu2 {
		display: none;
	}

	nav.call ul.call li.call:hover > ul.dropdown-menu2 {
		display: block;
		/*margin-bottom: 20px;*/
		margin-left: -99px;
		width:128%;
	}


	nav.call ul.call {
	padding: 0 0px;
	border-radius: 10px;  
	list-style: none;
	position: relative;
	display: inline-table;
	top:-23px;
	right:6px;
	}
	
	nav.call ul.call:after {
		content: ""; clear: both; display: block;
	}



	nav.call ul.call li.call {
	float: right;
	margin-left: 140px;
	}

	nav.call ul.call li.call ul.dropdown-menu2 li{
		margin-left: 0px;
	}

	nav.call ul.call li.call:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		
	nav.call ul.call li.call:hover a.call {
		color: #fff;
		background: #F1654C;
	}
	
	nav.call ul.call li.call a.call {
		display: block; /*padding: 13px 10px 0px 10px;*/
		padding:0px;
		padding-right:0px;
		color: #757575; text-decoration: none;
		border:0px solid black;
		margin-top: -15px;
		padding-top: 32px;
		height:0px;
		width:0px;
		margin-left: 0px;
		padding-left: 18px;
		padding-right: 43px;

		/*height:40px;*/

	/*	margin-left: 120px;*/
	}


	nav.call ul.call ul.dropdown-menu2 {
	background: #F1654C; border-radius: 0px; padding: 0;
	position: absolute; top: 100%;
	right:auto;
	left:100px;
	}

	nav.call ul.call ul.dropdown-menu2 li {
		float: none; 
		border-top: 0px solid #D4D4D4;
		border-bottom: 1px solid #D4D4D4;
		position: relative;
	}

	nav.call ul.call ul.dropdown-menu2 li a {
		padding: 15px 20px 15px 20px;
		width:95px;
		color: #fff;
		margin-top: 0px;
	}	
		
	nav.call ul.call ul.dropdown-menu2 li a:hover {
		background: #4b545f;
	}


	div.dealstitle{
		margin-top: 0px;
		font-size:15px;
		font-weight:bold;
		color:#3E4651;
		text-align: center;
		padding-top: 10px;
		border-top:3px solid #D4D4D4;
	}	


	div.maincontainer img.dealicon{
		width:150px;
		height:140px;
	}


	div.maincontainer h5.priceexpiry{
		font-size: 12px;
		color:#3E4651;
		background-color: #D4D4D4;
		text-align: center;
		margin-top: -6px;
	}






	div.reviews div.reviewstitle{
		margin-top: 15px;
		font-size:15px;
		font-weight:bold;
		color:#3E4651;
		text-align: center;
		padding-top:10px;
		border-top:3px solid #D4D4D4;
	}

	div.reviews table tr{
		text-align: left;
	}

	div.reviews table tr td h4{
		font-size: 20px;
		color:#00B5B5;
		font-style: italic;
		margin-bottom: 0px;
		margin-top: 0px;
	}	


	div.reviews table tr td h5{
		font-size: 11px;
		color:#3E4651;
		margin-bottom: 0px;
		margin-top: 0px;
	}	

	div.reviews table tr td h2.newcomment{
		font-size: 15px;
		color:#3E4651;
		margin-top: 0px;
		margin-bottom: 0px;
	}


	div.reviews table tr td input[type=text]{
		height:33px;
		width:280px;
	}



	div.reviews table tr td input[type=submit] {
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
		width:117px;
		margin-top: -5px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #F1654C;
	}
	div.reviews table tr td input[type=submit]:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #F1654C), color-stop(1, #F1654C) );
		background:-moz-linear-gradient( center top, #F1654C 5%, #F1654C 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#F1654C', endColorstr='#F1654C');
		background-color:#F1654C;
	}div.reviews table tr td input[type=submit]:active {
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


<!--============================== Main Container=================================== -->

		<div class="profile">

			
				<div class="profiletitle">
					<img src="img/Employee-24.png"/><br/>
					Profile
				</div>		

<!--============================== Profile pic, name email contact=================================== -->


				<div class="maincontainer">
		

						<img class="profilepic" src="img/LionKingMerchant.jpg">
				
				<p/>
						<h5 class="nameemail">lionking <br/>
							
							lionking@gmail.com <br/><br/></h5>
							
						<h4 class="likes">		Likes:
							
									<html>
										<body>
										
										<script> 
										var clicks = 0;

										function showClicks(){
											clicks++;
											var doc = document.getElementById("test").innerHTML=clicks;
										}
										</script>
										<img src="img/like.PNG" height = "15px" width = "15px" onclick="javascript:showClicks();">
										<span id="test"></span>
										</body>
										</html>
						</h4>

						<br/>

						
								<h5 class="contact">Contact:</h5>
			
									<nav class="call">
										<ul class="call">
										<li class="call">

											<a href="#" class="call" data-toggle="dropdown"><img class="call" src="img/originalcall.PNG" height = "20px" width = "20px"/></a>	


											<ul class="dropdown-menu2">
							                  <li>Call lionking?</li>

							                  	<li><a><input type = "call" value = "99827122" height = "20px" width = "60px" readonly></a></li>
							                  	<li><a><input type = "cancel" value = "Cancel" height = "20px" width = "60px" readonly></a></li>
							                  </li>
							                </ul>

						             	</li>
						             	</ul>
				             		</nav>
           						
				
<!--============================== Deals =================================== -->

			 	
				<div class="dealstitle">
					<img src="img/Shopping-Bag-24.png"/><br/>
					Deals
				</div>	


	 <table>
	 	
	 	<tr>
	 		<td>
	 

			<?php
				$images = array(
					0 => 'LionKing.jpg',
					1 => 'BreadTalk.jpg',
					2 => 'Food.jpg',
				);
				$image = $images[ rand(0,(count($images)-1)) ];
				$output = "<img class='dealicon' src=\"img/".$images[0]."\" alt=\"\" border=\"0\" />";
				?>
		<table>
			<tr>
    			<td height = "20px" width = "20px">
    				<?php 
    				print ($output); ?>
    			</td>
    		</tr>
    		<tr>
    			<td height = "20px" width = "20px">
	    		<h5 class="priceexpiry">	Price: <strike>$75</strike><font color = "#00B5B5"> $25 </font> / Tix <br/>
					Expiry: 28 Mar 2014<br/> </h5>
				</td>
			</tr>
		</table>

		</td>
	</tr>
	</table>




<!--==================================== Reviews ======================================================-->
<div class="reviews">	
	
	<div class="reviewstitle">
		<img src="img/Positive-24.png"><br/>
		Reviews
	</div>
		
	<br/>

	<table>
		<tr>	
			<td>
				
					
					<?php 
						$time = array("26-03-2014 09:05:20", "27-03-2014 11:05:39"); 
						$comments = array("I love the Fantastic show! ","It's Super awesome! It's a MUST to watch it!");

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
						   echo '<h4>"'.$comments[$x].'"</h4>';
						   echo '<h5>'.$time[$x].'</h5>';
						   echo "<br>";
						   echo "<br>";

						}
						
					?>
					
			</td>
		</tr>
	</table>





	<table>
		<tr>
			<td>
				<h2 class="newcomment">New Comment</h3>
					<form method="get" action="merchantlionking.php">
						
						<input type="text" class="newcomment" name="comment" id="comment"><br>
						
						<br>
						<input type="submit" class="newcomment" name="addcomment" value="Add Comment" />

					</form>
			</td>
		</tr>
	</table>
</div>

	


</div>
</div>