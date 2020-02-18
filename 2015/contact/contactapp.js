var main = function() {
  $(".dropdown-toggle").click(function() {
    $(".dropdown-menu").slideToggle(200);
  });
}

$(document).ready(main);

$('.circle-img').height($('.circle-img').width());

var animatedScroll = false;
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 28 && !animatedScroll) {
      animatedScroll = true;
      $('.whole-header').stop().animate({ "top": "-28px" }, 200);
      $('.header-space').stop().animate({ "height": "60px" }, 200);
    } else if ($(this).scrollTop() < 28 && animatedScroll) {
      animatedScroll = false;
      $('.whole-header').stop().animate({ "top": "0px" }, 200);
      $('.header-space').stop().animate({ "height": "88px" }, 200);
    }
  });
});

$(document).ready(function () {

  //Check to see if the window is top if not then display button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $('.back-to-top').fadeIn(300).removeClass('hidden');
    } else {
      $('.back-to-top').fadeOut(300);
    }
  });

  //Click event to scroll to top
  $('.scroll-home').click(function () {
    $('html, body').stop().animate({ scrollTop: 0 }, 1000);
    return false;
  });

  $('.back-to-top').hover(function () {
    $(this).stop().animate({
      "opacity": 0.8
    }, 300)
  }, function () {
    $(this).stop().animate({
      "opacity": 0.5
    }, 300)
  });
});

$(document).ready(function (e) {
  $('img[usemap]').rwdImageMaps();
});

function initialize() {
  var mapCanvas = document.getElementById('map-canvas');
  var myLatlng = new google.maps.LatLng(58.93816,5.69125);
  var mapOptions = {
    center: myLatlng,
    zoom: 15,
    scrollwheel : false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(mapCanvas, mapOptions)

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map
  });

  var infowindow = new google.maps.InfoWindow({
    content: "<p style='font-size: 14px;'><i class='fa fa-map-marker'></i> KE Maskinhallen D151, <br>Kristine Bonnevies Vei 22,<br>4021 Stavanger</p>"
  });
  infowindow.open(map,marker);
}
google.maps.event.addDomListener(window, 'load', initialize);
infowindow.open(map,marker);
