var main = function() {
  $(".dropdown-toggle").click(function() {
    $(".dropdown-menu").slideToggle(200);
  });
}
$(document).ready(main);

window.setInterval(function () {
  $('#sensorDataLive').load('getlivedata.php', 'update=true');
  lat = decify(badlat);
  long = decify(badlong);
}, reloadDataMs);

$(function() {
    var gHeight = $("#gauges").height();
    $(window).resize(function() {
        $('#gaugeFill').height( gHeight );
    }).resize();
});

function initialize() {
  var mapCanvas = document.getElementById('map-canvas');
  var myLatlng = new google.maps.LatLng(lat, long);
  var mapOptions = {
    center: myLatlng,
    zoom: 16,
    scrollwheel : false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(mapCanvas, mapOptions)

  marker = new SlidingMarker({
    easing: "linear",
    duration: reloadDataMs,
    position: myLatlng,
    map: map
  });
  moveMarker( map, marker );
}

function moveMarker( map, marker ) {
  window.setInterval(function () {

    marker.setPosition(new google.maps.LatLng(lat, long));

  }, reloadDataMs);

};

initialize();