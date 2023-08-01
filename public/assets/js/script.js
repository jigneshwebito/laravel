
$(document).ready(function () {
  $('#autoWidth1').lightSlider({
    autoWidth: true,
    loop: true,
    onSliderLoad: function () {
      $('#autoWidth1').removeClass('cS-hidden');
    }
  });
});




$(document).ready(function () {
  $('#autoWidth2').lightSlider({
    autoWidth: true,
    loop: true,
    onSliderLoad: function () {
      $('#autoWidth2').removeClass('cS-hidden');
    }
  });
});





$(document).ready(function () {
  $('#autoWidth3').lightSlider({
    autoWidth: true,
    loop: true,
    onSliderLoad: function () {
      $('#autoWidth2').removeClass('cS-hidden');
    }
  });
});













$(document).ready(function () {
  var mouseX, mouseY;
  var ww = $(window).width();
  var wh = $(window).height();
  var traX, traY;
  $(document).mousemove(function (e) {
    mouseX = e.pageX;
    mouseY = e.pageY;
    traX = ((4 * mouseX) / 570) + 40;
    traY = ((4 * mouseY) / 570) + 50;
    $(".title").css({ "background-position": traX + "%" + traY + "%" });
  });
});
