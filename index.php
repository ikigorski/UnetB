<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>UNetB - Qualidade de Rede</title>
		<link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon" />
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
	</head>
 
	<body  style="margin: 0 0 60px";>

		<?php
			include "public/header.inc";
		?>	
		
		<div id="map"></div>	
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXumgSxD3IY_5VhkxwyEQcbBVOS55H-xQ&callback=initMap"></script> 	

		

		<?php
			include "public/footer.inc";
		?>
		
	</body>

<script src="js/mapa.js"></script>
<script src="js/jquery.min.js"></script>    
<script src="js/bootstrap.min.js"></script>
</html>
