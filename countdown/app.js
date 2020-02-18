/* global $ */
$(document).ready(function() {
    var resizeBg = function() {
        if (window.matchMedia('(min-width: 768px)').matches) {
            var remHeight = $(window).height() - $('#headarea').height();
            $('#content').css("min-height", remHeight);
        } else {
            $('#content').css("min-height", "0");
        }
    };
    resizeBg();
    $(window).resize(function() { resizeBg(); });
});

function getRemTime(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var _seconds = Math.floor((t / 1000) % 60);
    var _minutes = Math.floor((t / (1000 * 60)) % 60);
    var _hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var _days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': _days,
        'hours': _hours,
        'minutes': _minutes,
        'seconds': _seconds
    };
}

function initClock(id, endtime) {
    var clock = document.getElementById(id);
    var days = clock.querySelector('.days');
    var hours = clock.querySelector('.hours');
    var minutes = clock.querySelector('.minutes');
    var seconds = clock.querySelector('.seconds');
    function updateClock() {
        var t = getRemTime(endtime);

        days.innerHTML = "Days: " + t.days;
        hours.innerHTML = "Hours: " + ('0' + t.hours).slice(-2);
        minutes.innerHTML = "Minutes: " + ('0' + t.minutes).slice(-2);
        seconds.innerHTML = "Seconds: " + ('0' + t.seconds).slice(-2);

        if (t.total <= 0) {
            $('#clockdiv').css("display", "none");
        }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
}

var deadline = 'May 2 2016 00:00:00 GMT+01:00';
initClock('clockdiv', deadline);