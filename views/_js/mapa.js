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



  // Marcador personalizado;
  var image = 'https://cdn1.iconfinder.com/data/icons/gpsmapicons/blue/gpsmapicons01.png';
  var marcadorPersonalizado = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: image,
      title: 'ICC',
      animation: google.maps.Animation.DROP
});
}

// Função para carregamento assíncrono
function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAXumgSxD3IY_5VhkxwyEQcbBVOS55H-xQ&callback=initMap";
  document.body.appendChild(script);

}

window.onload = loadScript;
