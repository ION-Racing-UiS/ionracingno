$(function () {
  var h = $('#headarea').outerHeight();
  $(window).resize(function () {
    $('#frame').height($(window).height() - h);
  }).resize();
});