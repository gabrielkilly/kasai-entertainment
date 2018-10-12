
$(document).ready(function(){
  $('.slider').slick({
    dots: true,
    infinite: true,
    speed: 600,
    slidesToShow: 1,
    adaptiveHeight: true
    });
  $(".parallax-img").paroller({
    factor: 0.9,
    type: 'foreground',
    direction: 'vertical' });
  $(".parallax-h1").paroller({
    factor: 0.2,
    type: 'foreground',
    direction: 'vertical' });
  $(".parallax-p").paroller({
    factor: 0.5,
    type: 'foreground',
    direction: 'vertical' });
  });
function toggleMenu() {
  $("li.outer.second, li.outer.third").toggle();
}
