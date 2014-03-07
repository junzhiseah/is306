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

	<div class="navbar">

	</div>	

	<table border = "1">
		<tr>
			<td width = "400px">
				<img src="img/LionKing.jpg" height = "280px" width = "280px">
			</td>
		</tr>
	</table>
	<table border = "1">
		<tr>
			<td width = "100px">
				<b>Title:</b>
			</td>
			<td width = "300px">
				<b>The Lion King Musical</b>
			</td>
		</tr>
		<tr>
			<td width = "100px">
				<b>Description:</b>
			</td>
			<td width = "300px">
				<b>Lion King Musical Tickets for Sale!</b>
			</td>
		</tr>
		<tr>
			<td width = "100px">
				<b>Date:</b>
			</td>
			<td width = "300px">
				<b>30 Mar 2014</b>
			</td>
		</tr>
		<tr>
			<td width = "100px">
				<b>Time:</b>
			</td>
			<td width = "300px">
				<b>1800hr - 2100hr</b>
			</td>
		</tr>
		<tr>
			<td width = "100px">
				<b>Venue:</b>
			</td>
			<td width = "300px">
				<b>2 Stadium Walk, 397691 Singapore Indoor Stadium</b>
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
						$jsonurl = "http://maps.googleapis.com/maps/api/geocode/json?address=640760&components=country:SG&sensor=false";
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
				<b>28 Mar 2014</b>
			</td>
		</tr>
	</table>

	<table border = "1">
		<tr>
			<td width = "85px">
				<b>Merchant:</b>
			</td>
			<td width = "200px" align = "center">
				<b><a href="">druthers</a></b>
			</td>
			<td width = "100px" align = "center">
				<a href=""><img src="img/originalcall.PNG" height = "20px" width = "20px"></a>
			</td>
		</tr>
	</table>


	<table border = "1">	
		<tr>
			<td width = "100px">
				<b>Price:</b>
			</td>
			<td width = "300px">
				<b><strike>$30</strike> <a style="color:red">$15</a> / Tix</b>
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



