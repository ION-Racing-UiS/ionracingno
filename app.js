/* global $ */
$(document).ready(function () {
    var resizeBg = function () {
        if (window.matchMedia('(min-width: 768px)').matches) {
            var remHeight = $(window).height() - $('#headarea').height();
            $('.heading').css("padding-top", parseInt($('.heading').css("padding-top"), 10) + remHeight);
        } else {
            $('.heading').css("padding-top", "1em");
        }
    };
    resizeBg();
    $(window).resize(function () { resizeBg(); });
});

var ion_keys = [73, 79, 78];
var ion_index = 0;
$(document).keydown(function (e) {
    console.log(e.keyCode);
    if (e.keyCode === ion_keys[ion_index++]) {
        if (ion_index === ion_keys.length) {
            $('#headarea').css('background-image', 'linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1)), url(/libs/images/bg_2016.png)');
        }
    } else {
        ion_index = 0;
    }
})