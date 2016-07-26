var map;

function mapInit() {
    var mapProp = {
        center: new google.maps.LatLng(48.8566,2.3522),
        zoom: 7,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map($('#map')[0], mapProp);

    var infoWindow = new google.maps.InfoWindow();
    var marker;

    points.forEach(function(point, key , array){
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(point.lat, point.long),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent("<img src='https://image.freepik.com/free-vector/background-of-france-with-eiffel-tower_1057-306.jpg' style='width: 150px;'/><br> <strong>User: </strong>"+point.user_name+"<strong><br>Lat: </strong>"+point.lat+"<strong><br>Long: </strong>"+point.long);
                infoWindow.open(map, marker);
            }
        })(marker, key));
    })
    marker.setMap(map);
}

$(function () {
    mapInit();
});

