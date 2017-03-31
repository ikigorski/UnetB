var map;
 
function initialize() {
    var latlng = new google.maps.LatLng(-15.7644, -47.870);
 
    var options = {
        zoom: 16,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    map = new google.maps.Map(document.getElementById("mapa"), options);
}
 
initialize();