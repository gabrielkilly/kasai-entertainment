
$(document).ready(function(){
  $('.slider').slick({
    dots: true,
    infinite: true,
    speed: 600,
    slidesToShow: 1,
    adaptiveHeight: true
    });
  });
function toggleMenu() {
  $("li.outer.second, li.outer.third").toggle();
}
