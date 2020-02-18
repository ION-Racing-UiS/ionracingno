var main = function() {
  $(".dropdown-toggle").click(function() {
    $(".dropdown-menu").slideToggle(200);
  });
}
$(document).ready(main);

$(function() {
    var aboveHeight = $(".whole-header").outerHeight(true);
    $(window).resize(function() {
        $('#model-frame').height( $(window).height() - aboveHeight );
    }).resize();
});

window.setInterval(function () {
  $('#sensorDataLive').load('getlivedata.php', 'update=true');
}, 1000);

