<?php
session_start();



$itemid = $_GET['itemid'];
$itemArr = $_SESSION['itemArr'];

$item = $itemArr[intval($itemid)];


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
		font-size:20px;
		font-weight:bold;
		font-style:normal;
		height:43px;
		line-height:20px;
		width:150px;
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
		-moz-box-shadow:inset 0px 1px 0px 0px #D4D4D4;
		-webkit-box-shadow:inset 0px 1px 0px 0px #D4D4D4;
		box-shadow:inset 0px 1px 0px 0px #D4D4D4;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, D4D4D4), color-stop(1, #D4D4D4) );
		background:-moz-linear-gradient( center top, #D4D4D4 5%, #D4D4D4 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#D4D4D4', endColorstr='#D4D4D4');
		background-color:#D4D4D4;
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
		border:0px solid #D4D4D4;
		display:inline-block;
		color:#3E4651;
		font-family:Trebuchet MS;
		font-size:13px;
		font-weight:bold;
		font-style:normal;
		height:43px;
		line-height:10px;
		width: 88px;
		margin-right: 0px;
		margin-left: 35px;
		margin-top: 0px;
		text-decoration:none;
		text-align:center;
		text-shadow:1px 1px 0px #D4D4D4;
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
		width:177px;
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
		width:177px;
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







/*==================================== Table Results Thumbnail Code ======================================*/

	div.maincontainer{
		padding:5px;
	}



	div.imagetitledesc img.mainpic{
		width:100%;
		height:220px;
		border-radius: 20px;
	}

	table tr td.titlename{
		color:black;
		font-size:14px;
	}


	table tr td.description{
		color:#949494;
		font-size:11px;
	}

	div.details div.detailstitle{
		margin-top: 25px;
		font-size:15px;
		font-weight:bold;
		color:#3E4651;
		text-align: center;
		padding-top: 10px;
		border-top:3px solid #D4D4D4;
	}	

	div.map tr td.maptitle{
		margin-top: 25px;
		font-size:15px;
		font-weight:bold;
		color:#3E4651;
		text-align: center;
		padding-top:10px;
		border-top:3px solid #D4D4D4;
	}	

	div.merchant table tr{
		width:100%
	}

	div.merchant div.merchanttitle{
		margin-top: 25px;
		font-size:15px;
		font-weight:bold;
		color:#3E4651;
		text-align: center;
		padding-top:10px;
		border-top:3px solid #D4D4D4;
	}	

	div.merchant a{
		font-size:13px;
		color:#00B5B5;
		font-weight: bold;
		text-decoration: none;
	}



	nav.call ul.call li.call a img{
		top:-10px;
		right:0px;
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
		margin-top: 0px;
		padding-top: 25px;
		height:31px;
		width:0px;
		margin-left: -30px;
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


	div.termsandconditions{
		margin-top: 15px;
		font-size:15px;
		font-weight:bold;
		color:#3E4651;
		text-align: center;
		padding-top:10px;
		border-top:3px solid #D4D4D4;
	}	


	div.termsandconditions h5{
		font-size:10px;
		color:black;
		font-weight: bold;
		text-decoration: none;
	}

	div.termsandconditions h5 a{
		font-size:12px;
		color:black;
		font-weight: bold;
		text-decoration: none;
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



	div.buynow div.buynowtitle{
		margin-top: 15px;
		font-size:15px;
		font-weight:bold;
		color:#3E4651;
		text-align: center;
		padding-top:10px;
		border-top:3px solid #D4D4D4;
	}

	div.buynow table tr td h2{
		font-size: 15px;
		color:#3E4651;
		margin-top: 0px;
		margin-bottom: 0px;
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
		width:100%;
	}

	table tr.space{
		/*background-color: #F1654C;*/
		border-bottom:3px solid #D4D4D4;
		width:100%;
		/*background-color: #FFFFFF;*/
	}

	table tr td{
		padding:3px;
		font-size:11px;
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
		color:#3E4651;
		font-size:12px;
		padding-left: 10px;
	}


	table tr td.price a{
		font-size:33px;
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
								    <li><a href="#">Help</a></li>	
		                	</ul>

					<?php } else{ ?>
						<ul class="dropdown-menu">
							 <li><a href="index.php">Home</a></li>	
		                 	 <li><a href="richardprofile.php">My Profile</a></li>
		                  	<li><a href="bookmark.php">Bookmarks</a></li>
		                  	<li><a href="purchases.php">My Purchases</a></li>
		                 	 <li><a href="#" >My Listings</a></li>
		                 	 <li><a href="#" >Help</a></li>
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

<!-- 
<?php 
if(isset($_SESSION['myusername'])){
		$name = $_SESSION['myusername'];	

		echo 'Welcome, ';
		echo '<b>'.$name.'</b>';
	}
?>
 -->



<!--==================================== Main Container ======================================================-->




<div class="maincontainer">




<!--==================================== Image Title Price and Description ======================================================-->


<div class="imagetitledesc">
	<table>
		<tr>
			<td width = "400px">
				<img class="mainpic" src="<?php echo $item['image']; ?>">
			</td>
		</tr>
	</table>


	<table>
		<tr>
			<td class="titlename">
				<b><?php echo $item['title']; ?></b>
			</td>
		</tr>
		<tr>
			<td class="description">
				<?php echo $item['description']; ?>
			</td>
		</tr>



		<tr>
			<td class="price">
				<strike>$<?php echo $item['usualprice']; ?></strike> <a style="color:#00B5B5">$<?php echo $item['currentprice']; ?></a> / <?php echo $item['quantifier']; ?>
			</td>
		</tr>
	</table>
</div>

	


<!--==================================== Details ======================================================-->


	<div class="details">	

		
		<div class="detailstitle"><img src="img/Note-01-24.png"><br/>
		Details
		</div>
		<br/>

		<table>	
		<tr>
			<td class="date">
				<b><?php echo $item['date']; ?></b>
		
				<b><?php echo ', '.$item['start']; ?>hr - <?php echo $item['end']; ?>hr</b>
			</td>
		</tr>


		<tr>
			<td class="venue">
				<b><?php echo $item['venue']; ?></b>
			</td>
		</tr>
	</table>

	</div>


<!--==================================== Map ======================================================-->



	<div class="map">

	<table>

		<tr><td class="maptitle"><img src="img/Map-24.png"><br/>
		Location
		<td></tr>

		<tr>
			<td width = "300px">

				<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
				<style>
					#map-canvas {
						height: 280px;
						width: 280px;
					}

					#pano {
						height: 280px;
						width: 280px;
							       
					}

					.gmnoprint img {
						max-width: none; 
									}
				</style>
					<?php

						$jsonurl = "http://maps.googleapis.com/maps/api/geocode/json?address=596569&components=country:SG&sensor=false";
						$json = file_get_contents($jsonurl);
						$json_output = json_decode($json, true);

						$status = $json_output['status'];
							      

					?>

				<script>
					var map;
					var lat = "<?php Print($json_output['results'][0]['geometry']['location']['lat']); ?>";
					var lng = "<?php Print($json_output['results'][0]['geometry']['location']['lng']); ?>";
					var myCenter=new google.maps.LatLng(lat,lng);


					function initialize() {
						var mapOptions = {
							zoom: 17,
							center: myCenter,
							mapTypeId: google.maps.MapTypeId.ROADMAP
						};
						map = new google.maps.Map(document.getElementById('map-canvas'),
							mapOptions);

						var panoramaOptions = {
							position: myCenter,
							pov: {
								heading: 34,
								pitch: 10
							}
						};
						var panorama = new  google.maps.StreetViewPanorama(document.getElementById('pano'),panoramaOptions);
						map.setStreetView(panorama);

						var marker = new google.maps.Marker({
							position:myCenter,
						});

						marker.setMap(map);
					}

					google.maps.event.addDomListener(window, 'load', initialize);
				</script>
								
				<div style="width:200px;">
					<div class="divmargin" style="margin-left:0px"style="margin-top:0px;">
						<div id="map-canvas">
						</div>
					</div>
									
					<div class="divmargin"style="margin-left:0px"style="margin-top:0px;">
						<div id="pano">
						</div>
					</div>
				</div>
			</td>
		</tr>
	</table>


</div>

<p/>


<!--==================================== Merchant ======================================================-->


<div class="merchant">
	

	<div class="merchanttitle">

		<img src="img/Employee-24.png"/><br/>
		Merchant
	</div>


		<table>
		<tr>
			
			<td>
				<b>Merchant:  </b><b><a href="merchant<?php echo $item['merchant']; ?>.php"><?php echo $item['merchant']; ?></a></b>
			</td>
		</tr>
		</table>	

		
		
				<nav class="call">
					<ul class="call">
					<li class="call">

						<a href="#" data-toggle="dropdown" class="call"><img src="img/originalcall.PNG" height = "30px" width = "30px"/></a>	


						<ul class="dropdown-menu2">
		                  <li>Call<?php echo $item['merchant']; ?></li>

		                  	<li><a><input type = "call" value = "<?php echo $item['merchantphone']; ?>" height = "20px" width = "60px" readonly></a></li>
		                  	<li><a><input type = "cancel" value = "Cancel" height = "20px" width = "60px" readonly></a></li>
		                  </li>
		                </ul>

	             	</li>
	             	</ul>
             	</nav>
<!-- 				<a href=""><img src="img/originalcall.PNG" height = "20px" width = "20px"></a> -->
		
</div>	




<!--==================================== Expiry Date, T&C ======================================================-->
<div class="termsandconditions">

		<img src="img/Rules-24.png"/><br/>
		Terms and Conditions

		<br/>

			<h5>Valid till 
			
				<?php echo $item['expiry']; ?>
		
			<br/><br/>


				Click <a href="termsandconditionlionking.php">here</a> to view the Terms and Conditions

			</h5>	

</div>

			
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
						$comments = array("I love the discount! ","Thank you for the promotion!");

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
					<form method="get" action="dealinfo.php?itemid=<?php echo $itemid; ?>">
						<input type = "hidden" name ="itemid" value = "<?php echo $itemid; ?>">
						<input type="text" class="newcomment" name="comment" id="comment"><br>
						
						<br>
						<input type="submit" class="newcomment" name="addcomment" value="Add Comment" />

					</form>
			</td>
		</tr>
	</table>
</div>


		
<!--==================================== Buy Now, Like ======================================================-->

<div class="buynow">	
	
	<div class="buynowtitle">
		<img src="img/Gift-01-24.png">
		
	</div>
		
	<br/>


	<table>

		<script>
			window.onload = function(){
				var clicks = 5;
				var doc = document.getElementById("test").innerHTML=clicks;
			}
		</script>

		<script> 
										
			function showClicks(){
				clicks = 6;
				var doc = document.getElementById("test").innerHTML=clicks;
			}
		</script>
		<tr>
			<td><h2>Likes: <span id="test"></span><img src="img/like.PNG" height = "15px" width = "15px" onclick="javascript:showClicks();"></h2></td>
		</tr>
		<tr></tr>
		<tr>	
			<td><a href = "payment.php?itemid=<?php echo $itemid; ?>"><input type = "buy" value = "Buy!" height = "10px" width = "20px"></a>
				
				<td><a href="dealinfo.php?bookmark=<?php echo $itemid; ?>&itemid=<?php echo $itemid; ?>"><input type = "bookmark" value = "Bookmark"></a></td>
				<input type = "hidden" name ="itemid" value = "<?php echo $itemid; ?>">

			</td>
		</tr>
	</table>



</div>
