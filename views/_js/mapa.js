// var map;
// function initMap() {
//   map = new google.maps.Map(document.getElementById('map'), {
//     center: {lat: -15.763, lng: -47.869},
//     zoom: 18
//   });
// }

function initMap() {

  // Exibir mapa;
  var myLatlng = new google.maps.LatLng(-15.763, -47.869);
  var mapOptions = {
    zoom: 18,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }

  // Exibir o mapa na div #mapa;
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  var contentString = 'TESTE';

  var internetInfo= new google.maps.InfoWindow({
      content: contentString
  }) 


  // Marcador personalizado;
  // var image = 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m';
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      // icon: image,
      title: 'ICC',
      animation: google.maps.Animation.DROP
    });

    marker.addListener('click', function(){
      internetInfo.open(map, marker);
    });

  //  Teste de Geolocalização
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var pos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
            };

        infoWindow.setPosition(pos);
        infoWindow.setContent('Location found.');
        map.setCenter(pos);
        }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
        });
        } else {
          // Navegador não suporta geolocalização
          handleLocationError(false, infoWindow, map.getCenter());
        }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
}

// Função para carregamento assíncrono
function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAXumgSxD3IY_5VhkxwyEQcbBVOS55H-xQ&callback=initMap";
  document.body.appendChild(script);

}

window.onload = loadScript;
