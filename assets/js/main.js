
$(document).ready(function(){
  $('.slider').slick({
    dots: true,
    infinite: true,
    speed: 600,
    slidesToShow: 1,
    autoplay: true,
    adaptiveHeight: false
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
  wordChanger();
});
function toggleMenu() {
  $("li.outer.second, li.outer.third").toggle();
}
var words = ["JOY", "DANCE", "MUSIC", "MEMORIES"];
var iters = 0;
function wordChanger() {
  var span = $("span#wordChanger");
  if(iters < words.length) {
    span.text(words[iters])
        .fadeIn(400)
        .delay(1000)
        .fadeOut(400, wordChanger)
  } else {
    span.text("MOMENTS")
        .fadeIn(400);
  }
  iters = iters + 1;
}
