
var main = function() {
  $(".dropdown-toggle").click(function() {
    $(".dropdown-menu").slideToggle(200);
  });
}

$(document).ready(main);

$('.gal-img').width($('.gal-cont').width() / 10);

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

$(document).ready(function () {
  $(".fancybox").fancybox({
    helpers: {
      title: {
        type: 'outside'
      },
      overlay: {
        locked: false
      }
    },
    padding: 0,
    openEffect: 'elastic',
    closeEffect: 'elastic',
    prevEffect: 'fade',
    nextEffect: 'fade'
  });
});

$(document).ready(function (e) {
  $('img[usemap]').rwdImageMaps();
});