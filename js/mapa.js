var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -15.763, lng: -47.869},
    zoom: 18
  });
}