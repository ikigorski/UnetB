<!DOCTYPE html>
<html lang="pt-br">

	<!-- INCLUE O HEAD NA PÁGINA -->
	<?php include "_includes/head.php";?>
 
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
