/* global $ */
$(document).ready(function () {
    $('.image-link').magnificPopup({ type: 'image' });
    
    var resizeBg = function() {
        if (window.matchMedia('(min-width: 768px)').matches) {
            var imgRatio = 900 / 1920;
            var remHeight = ($(window).width() * imgRatio) - $('#headarea').height();
            $('.heading').css("padding-top", parseInt($('.heading').css("padding-top"), 10) + remHeight);
        } else {
            $('.heading').css("padding-top", "1em");
        }
    };
    resizeBg();
    $( window ).resize(function() { resizeBg(); }); 
});