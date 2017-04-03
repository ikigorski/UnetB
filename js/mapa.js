function initMap(){		
			
        var uluru = {lat: -15.763401, lng: -47.869641};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
        
}