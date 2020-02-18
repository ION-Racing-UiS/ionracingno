$(function () {
    $(window).resize(function () {
        var h = $('#headarea').outerHeight();
        var f = parseInt($('#frame').css('margin-top'));
        $('#frame').height($(window).height() - h - f);
    }).resize();
});