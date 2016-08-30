var map;

function mapInit() {
    var mapProp = {
        center: new google.maps.LatLng(48.8566, 2.3522),
        zoom: 2,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map($('#map')[0], mapProp);

    var infoWindow = new google.maps.InfoWindow();
    var marker;

    points.forEach(function (point, key, array) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(point.lat, point.long),
            icon: 'images/photo_icon_map.png',
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infoWindow.setContent("<a href='?page=singlephoto&id=" + point.id + "' target='_blank'><img src='thumbs/" + point.filename + "'/></a><br> <strong>User: </strong>" + point.user_name + "<strong><br>Upload Date: </strong>" + point.upload_time + "<strong><br>Photo Date: </strong>" + point.date + "<strong><br>Device Model: </strong>" + point.device_model);
                infoWindow.open(map, marker);
            }
        })(marker, key));
    })
    marker.setMap(map);
}

$(function () {
    mapInit();
});

