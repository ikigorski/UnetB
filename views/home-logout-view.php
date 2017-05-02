<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="_images/favicon.png" type="image/x-icon"/>
		<link href="_css/bootstrap.css" rel="stylesheet">
		<link href="_css/custom.css" rel="stylesheet">
		<title>UNetB - Qualidade de Rede</title>
	</head>
 
	<body> 	
		
		<!-- INCLUE O HEADER NA PÁGINA -->
		<?php include "_includes/header.php";?>
		
		<div id="map" class="map"></div>

	</body>
	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXumgSxD3IY_5VhkxwyEQcbBVOS55H-xQ&callback=initMap"></script> <!-- Carrega JS do Google Maps-->
	<script src="_js/mapa.js"></script> <!-- Carrega JS do Google Maps-->
	<script src="_js/jquery.min.js"></script> <!-- Carrega JS jquery-->
	<script src="_js/bootstrap.js"></script> <!-- Carrega JS do bootstrap-->
</html>
