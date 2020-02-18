var main = function() {
  $(".dropdown-toggle").click(function() {
    $(".dropdown-menu").slideToggle(200);
  });
}
$(document).ready(main);