var map;

$('#belguim').click(function () {
    mapChange(50.5039, 4.4699);
});
$('#iceland').click(function () {
    mapChange(64.9631, -19.0208);
});
$('#france').click(function () {
    mapChange(46.2276, 2.2137);
});
$('#bulgaria').click(function () {
    mapChange(42.7339, 25.4858);
});

function mapChange(lat, lon) {
    map.setCenter(new google.maps.LatLng(lat, lon));
}

function mapInit() {
    var mapProp = {
        center: new google.maps.LatLng(51.508742, -0.120850),
        zoom: 7,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
    map = new google.maps.Map($('#map')[0], mapProp);
}

$(function () {
    mapInit();
});