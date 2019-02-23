$(document).ready(function(){
  slickSlidersMaker();
});

function slickSlidersMaker() {
  $('.slider').slick({
    // autoplay: true,
    // autoplaySpeed: 2000,
    centerMode: true,
    variableWidth: true,
    infinite: true,
    dots: true,
    speed: 1000,
    arrows: true
  });
}

function showInfo(elem) {
  $(elem).parent().find('.section-modal').addClass('display');
}
function hideInfo(elem) {
  $(elem).parent().removeClass('display');
}
