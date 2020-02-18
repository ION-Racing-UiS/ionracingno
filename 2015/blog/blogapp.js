var main = function() {
  $(".dropdown-toggle").click(function() {
    $(".dropdown-menu").slideToggle(200);
  });
}
$(document).ready(main);

$(function() {
    var aboveHeight = $(".whole-header").outerHeight(true);
    $(window).resize(function() {
        $('#blog-frame').height( $(window).height() - aboveHeight );
    }).resize();
});

var konami_keys = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
var konami_index = 0;
$(document).keydown(function (e) {
  if (e.keyCode === konami_keys[konami_index++]) {
    if (konami_index === konami_keys.length) {
      $(document).unbind('keydown', arguments.callee);
      $.fancybox({
        'padding': 0,
        'autoScale': false,
        'transitionIn': 'none',
        'transitionOut': 'none',
        'title': this.title,
        'width': 680,
        'height': 495,
        'href': 'https://www.youtube.com/watch?v=OaJZYMXx8X4&autoplay=1'.replace(new RegExp("watch\\?v=", "i"), 'v/'),
        'type': 'swf',
        'swf': {
          'wmode': 'transparent',
          'allowfullscreen': 'true'
        }
      });
    }
  } else {
    konami_index = 0;
  }
})

$(document).ready(function () {
  $(".fancybox").fancybox();
});