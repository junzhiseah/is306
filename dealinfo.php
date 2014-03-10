<?php
session_start();
$itemId = $_GET['itemid'];
$itemArr = $_SESSION['itemArr'];

$item = $itemArr[intval($itemId)];

?>
          <link href="css/bootstrap.min.css">
          <link href="css/bootstrap-theme.min.css">
          <link href="css/bootstrap-theme.css">
          <link href="css/bootstrap.css">
          <link href="css/bootstrap-responsive.css">
          <link href="css/bootstrap-responsive.min.css">
          <link href="css/bootstrap-custom.css">
          <link href="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js">

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
		width:270px;
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
		width:270px;
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








	nav ul ul {
		display: none;
	}

	nav ul li:hover > ul {
		display: block;
		/*margin-bottom: 20px;*/
	}


	nav ul {
	padding: 0 0px;
	border-radius: 0px;  
	list-style: none;
	position: relative;
	display: inline-table;
	}
	
	nav ul:after {
		content: ""; clear: both; display: block;
	}



	nav ul li {
	float: right;
	margin-left: 0px;
	}

	nav ul li ul li{
		margin-left: 0px;
	}

/*	nav ul li:hover {
		background: #4b545f;
		background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
		background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
	}
		
	nav ul li:hover a {
		color: #fff;
	}*/
	
	nav ul li a {
		display: block; /*padding: 13px 10px 0px 10px;*/

		padding:0px;
		color: #757575; text-decoration: none;
		border:0px solid black;
		margin-top: 0px;

		/*height:40px;*/

	/*	margin-left: 120px;*/
	}


	nav ul ul {
	background: #5f6975; border-radius: 0px; padding: 0;
	position: absolute; top: 100%;
	opacity: 1;
	}

	nav ul ul li {
		float: none; 
		border-top: 1px solid #6b727c;
		border-bottom: 1px solid #575f6a;
		position: relative;
	}

	nav ul ul li a {
		padding: 10px 80px 10px 80px;
		width:121px;
		color: #fff;
		opacity: 1;
		position: relative;
		right:26.5%;

	}	
		
/*	nav ul ul li a:hover {
		background: #4b545f;

	}*/





</style>

	<div class="navbar">

	</div>	

	<table border = "1">
		<tr>
			<td width = "400px">
				<img src="<?php echo $item['image']; ?>" height = "280px" width = "280px">
			</td>
		</tr>
	</table>
	<table border = "1">
		<tr>
			<td width = "100px">
				<b>Title:</b>
			</td>
			<td width = "300px">
				<b><?php echo $item['title']; ?></b>
			</td>
		</tr>
		<tr>
			<td width = "100px">
				<b>Description:</b>
			</td>
			<td width = "300px">
				<b><?php echo $item['description']; ?></b>
			</td>
		</tr>
		<tr>
			<td width = "100px">
				<b>Date:</b>
			</td>
			<td width = "300px">
				<b><?php echo $item['date']; ?></b>
			</td>
		</tr>
		<tr>
			<td width = "100px">
				<b>Time:</b>
			</td>
			<td width = "300px">
				<b><?php echo $item['start']; ?>hr - <?php echo $item['end']; ?>hr</b>
			</td>
		</tr>
		<tr>
			<td width = "100px">
				<b>Venue:</b>
			</td>
			<td width = "300px">
				<b><?php echo $item['venue']; ?>/b>
			</td>
		</tr>
	</table>
	<table border = "1">
		<tr>
			<td align = "center"><b>Map:</b></td>
		</tr>
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

	<table border = "1">
		<tr>
			<td width = "100px">
				<b>Expiry Date:</b>
			</td>
			<td width = "300px">
				<b><?php echo $item['expiry']; ?></b>
			</td>
		</tr>
	</table>

	<table border = "1">
		<tr>
			<td width = "85px">
				<b>Merchant:</b>
			</td>
			<td width = "280px" align = "center">
				<b><a href=""><?php echo $item['merchant']; ?></a></b>
			</td>
			<td width = "20px" align = "right">
				<nav>
					<ul>
					<li>

						<a href="#" data-toggle="dropdown"><img src="img/originalcall.PNG" height = "20px" width = "20px"/></a>	


						<ul class="dropdown-menu" style="right: 0; left: auto;">
		                  <li><center>Call lionking?</center></li>

		                  	<li><a><input type = "call" value = "<?php echo $item['merchantphone']; ?>" height = "20px" width = "60px" readonly></a></li>
		                  	<li><a><input type = "cancel" value = "Cancel" height = "20px" width = "60px" readonly></a></li>
		                  </li>
		                </ul>

	             	</li>
	             	</ul>
             	</nav>
<!-- 				<a href=""><img src="img/originalcall.PNG" height = "20px" width = "20px"></a> -->
			</td>
		</tr>
	</table>


	<table border = "1">	
		<tr>
			<td width = "100px">
				<b>Price:</b>
			</td>
			<td width = "300px">
				<b><strike>$<?php echo $item['usualprice']; ?></strike> <a style="color:red">$<?php echo $item['currentprice']; ?></a> / <?php echo $item['quantifier']; ?></b>
			</td>
		</tr>
	</table>

	<table border = "1">
		<tr>
			<td width = "400px" align = "center">
				<i><a href="">Terms and Conditions</a></i>
			</td>
		</tr>
	</table>



